<?php

namespace App\Repositories\Abstract;

use App\Models\User;
use Prettus\Repository\Contracts\RepositoryInterface;

interface IUserRepository extends RepositoryInterface
{
    public function createUser(User $user, $input);
}
