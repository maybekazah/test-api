<?php

namespace App\Services;

use App\DTO\AuthDto;
use App\Exceptions\LoginDataException;
use App\Exceptions\LoginEmailException;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\Abstract\IAuthService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use App\Http\Requests\Api\V1\ForgotPasswordRequest;


class AuthService implements IAuthService

{
    public function __construct(
        protected UserRepository $userRepository,
    )
    {

    }

    public function login(array $input)
    {
        $password = $input['password'];
        if (!$user = User::query()->where('email', '=', $input['email'])->first()) {
            throw new LoginEmailException('Такой почты не существует', 400);
        }

        if (!Hash::check($password, $user->password)) {
            throw new LoginDataException('Ошибка в заполнении данных', 400);
        }
        $token = $user->createToken('authToken')->plainTextToken;
        return AuthDto::create(['user' => $user, 'token' => $token, 'password' => $password]);

    }

    public function register(array $input)
    {
        $password = mb_strimwidth(md5(random_int(1, 1000000)), 1, 8);
        $input['password'] = Hash::make($password);
        $input['is_finished'] = false;

        $user = $this->userRepository->createUser(new User(), $input);
        Auth::login($user, true);

        $token = $user->createToken('authToken')->plainTextToken;
        return AuthDto::create(['user' => $user, 'token' => $token, 'password' => $password]);

    }

//    public function forgotPassword(ForgotPasswordRequest $request)
//    {
//        $request->validated();
//        $status = Password::sendResetLink($request->only('email'));
//        dd($status);
//
//        return response()->json(['message' => 'success'], 200);
//    }
//
//    public function passwordReset(array $input)
//    {
//        return response()->json();
//    }

}
