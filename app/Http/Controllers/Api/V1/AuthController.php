<?php

namespace App\Http\Controllers\Api\V1;

use App\DTO\AuthRegisterDto;
use App\DTO\DTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {

    }

    public function register(RegisterRequest $request)
    {
        $password = mb_strimwidth(md5(random_int(1, 1000000)), 1, 8);
        $request = $request->validated();
        $request['password'] = Hash::make($password);
        $request['is_finished'] = false;
        $user = User::query()->create($request);
        Auth::login($user, true);

        $token = $user->createToken('authToken')->accessToken;
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


