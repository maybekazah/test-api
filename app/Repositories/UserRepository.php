<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Abstract\IUserRepository;
use Illuminate\Support\Facades\Auth;

class UserRepository implements IUserRepository
{
    public function createUser($request)
    {
        $user = User::query()->create($request);
        Auth::login($user, true);
        return $user;
    }
}
