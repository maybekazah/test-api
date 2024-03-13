<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserShowResource;
use App\Services\AuthService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(
        protected AuthService $authService,
    )
    {

    }

    public function show()
    {
        return UserShowResource::make(
            $this->authService->showUser()
        );
    }
}
