<?php

namespace App\Services\Abstract;

use App\Http\Requests\Api\V1\ForgotPasswordRequest;

interface IAuthService
{
    public function register(array $input);

    public function login(array $input);

//    public function forgotPassword(ForgotPasswordRequest $request);
//
//    public function passwordReset(array $input);
}
