<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\LoginRequest;
use App\Http\Requests\Api\V1\RegisterRequest;
use App\Http\Resources\UserLoginResource;
use App\Http\Resources\UserRegisterResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct(
        protected AuthService $authService,
    )
    {
    }


    public function login(LoginRequest $request)
    {
        return UserLoginResource::make(
            $this->authService->login($request->validated())
        );

    }

    public function register(RegisterRequest $request)
    {
        return UserRegisterResource::make(
            $this->authService->register($request->validated())
        );
    }
}


