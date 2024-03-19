<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\LoginRequest;
use App\Http\Requests\Api\V1\RegisterRequest;
use App\Http\Requests\Api\V1\PasswordResetRequest;
use App\Http\Requests\Api\V1\ForgotPasswordRequest;
use App\Http\Resources\V1\AuthResource;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function __construct(
        protected AuthService $authService,
    )
    {
    }

    public function login(LoginRequest $request)
    {
        return AuthResource::make(
            $this->authService->login($request->validated())
        );

    }

    public function register(RegisterRequest $request)
    {
        return AuthResource::make(
            $this->authService->register($request->validated())
        );
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response('logged out', 201);

    }

    public function forgotPassword(ForgotPasswordRequest $request)
    {
        return $this->authService->forgotPassword($request);
    }

    public function passwordReset(PasswordResetRequest $request)
    {
        return $this->authService->passwordReset($request->validated());
    }
}


