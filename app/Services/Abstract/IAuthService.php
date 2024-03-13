<?php

namespace App\Services\Abstract;

interface IAuthService
{
    public function register(array $input);

    public function login(array $input);
    public function showUser();

}
