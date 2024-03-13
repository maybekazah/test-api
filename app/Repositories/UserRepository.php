<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Abstract\IUserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepository extends BaseRepository implements IUserRepository
{
    public function model(): string
    {
        return User::class;
    }

//    public function getUserWithJoin()
//    {
//        return $this->model->newQuery()->join()->where();
//    }
    public function createUser(User $user, $input)
    {
        return DB::transaction(function () use ($user, $input) {
            $user->fill($input);
            $user->save();
            return $user;
        });
    }
}
