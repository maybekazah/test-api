<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\Abstract\IAuthService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService implements IAuthService

{
    public function __construct(
        protected UserRepository $userRepository,
    )
    {

    }
    public function passwordCreate(): string
    {
        return mb_strimwidth(md5(random_int(1, 1000000)), 1, 8);
    }

    public function request($request, $password): array
    {
        $request = $request->validated();
        $request['password'] = Hash::make($password);
        $request['is_finished'] = false;
        return $request;
    }

    public function userCreateAndAuth($request)
    {
        $user = $this->userRepository->createUser($request);
        return $user;
    }

    public function tokenCreate($user)
    {
        return $user->createToken('authToken')->accessToken;
    }
}
