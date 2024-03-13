<?php

namespace App\Services;

use App\DTO\AuthLoginDto;
use App\DTO\AuthRegisterDto;
use App\DTO\AuthShowUserDto;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\Abstract\IAuthService;
use http\Env\Response;
use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\JsonResponse;

class AuthService implements IAuthService

{
    public function __construct(
        protected UserRepository $userRepository,
    )
    {

    }

    public function login(array $input)
    {
        if (\auth()->attempt($input)) {
            $user = \auth()->user();

            $password = $input['password'];


//            Токен должен выдаваться не в хеше!! переделать

//            $token = DB::table('personal_access_tokens')
//                ->where('tokenable_id', $user->id)
//                ->pluck('token')
//                ->toArray();

            $token = $user->;
            dd($token);
            return AuthLoginDto::create(['user' => $user, 'token' => $token, 'password' => $password]);
        }
        return ['error'];

    }

    public function register(array $input)
    {
        $password = mb_strimwidth(md5(random_int(1, 1000000)), 1, 8);
        $input['password'] = Hash::make($password);
        $input['is_finished'] = false;

        $user = $this->userRepository->createUser(new User(), $input);
        Auth::login($user, true);

        $token = $user->createToken('authToken')->plainTextToken;
        return AuthRegisterDto::create(['user' => $user, 'token' => $token, 'password' => $password]);

    }

    public function showUser()
    {
        $user = auth()->user();
        return AuthShowUserDto::create(['user' => $user]);
    }
}
