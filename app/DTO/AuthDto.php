<?php

namespace App\DTO;

use App\DTO\DTO;
use App\Models\User;

class AuthDto extends DTO
{
    public function __construct(
        public User   $user,
        public string $token,
        public string $password,
    )
    {

    }
}
