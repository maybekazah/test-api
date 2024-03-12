<?php

namespace App\Services\Abstract;

interface IAuthService
{
    public function passwordCreate(): string;

    public function request($request, $password): array;

    public function userCreateAndAuth($request);

    public function tokenCreate($user);

}
