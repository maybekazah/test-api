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
            throw new LoginDataException('Неверный пароль', 400);
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

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json(['message' => 'logged out'], 200);
    }

    public function forgotPassword(array $input)
    {
        Password::sendResetLink($input);
        return response()->json(['message' => 'ссылка для восстановления была отправлена на почту'], 200);
    }

    public function passwordReset(array $input)
    {

//        return response()->json(['message' => 'какое то сообщение'], 200);

    }
}
