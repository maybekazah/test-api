<?php

namespace App\DTO;

use App\Models\User;
use App\DTO\DTO;

class AuthShowUserDto extends DTO
{

    public function __construct(
        public User $user,
    )

    {

    }
}
