<?php

namespace App\Http\Controllers\Api\V1;

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

        if (User::query()->create($request)) {

            Auth::attempt($request);
            return response()->json(['message' => 'success'], 200);
        }

        return response()->json(['message' => 'Unknown Error '], 520);

    }

    public function restore()
    {

    }

    public function restoreConfirm()
    {

    }
}


