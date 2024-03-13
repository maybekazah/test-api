<?php

namespace App\DTO;

use App\DTO\DTO;
use App\Models\User;

class AuthLoginDto extends DTO
{
    public function __construct(
        public User   $user,
        public array $token,
        public string $password,
    )
    {

    }
}
