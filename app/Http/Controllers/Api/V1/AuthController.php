<?php

namespace App\Http\Controllers\Api\V1;

use App\DTO\AuthRegisterDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\AuthService;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function __construct(
        protected AuthService    $authService,
    )
    {

    }

    public function login()
    {

    }

    public function register(RegisterRequest $request)
    {
        $password = $this->authService->passwordCreate();

        $request = $this->authService->request($request, $password);

        $user = $this->authService->userCreateAndAuth($request);

        $token = $this->authService->tokenCreate($user);

        $dto = AuthRegisterDto::create(['user' => $user, 'token' => $token->token, 'password' => $password]);
        return UserResource::make($dto);

    }

    public function restore()
    {

    }

    public function restoreConfirm()
    {

    }
}


