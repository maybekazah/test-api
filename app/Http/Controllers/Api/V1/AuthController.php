<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\RegisterRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {

    }

    public function register(RegisterRequest $request)
    {
        User::query()->create($request->validated());
        return response()->json(['message' => 'success'], 200);
    }

    public function restore()
    {

    }

    public function restoreConfirm()
    {

    }
}


