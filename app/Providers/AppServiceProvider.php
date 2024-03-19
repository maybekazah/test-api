<?php

namespace App\Providers;

use App\Http\Resources\V1\UserResource;
use App\Services\Abstract\IAuthLoginService;
use App\Services\Abstract\IAuthRestoreConfirmService;
use App\Services\Abstract\IAuthRestoreService;
use App\Services\Abstract\IAuthService;
use App\Services\Abstract\IUserService;
use App\Services\AuthLoginService;
use App\Services\AuthRestoreConfirmService;
use App\Services\AuthRestoreService;
use App\Services\AuthService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public array $bindings = [

        IAuthService::class => AuthService::class,
        IUserService::class => UserService::class,

    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        UserResource::withoutWrapping();
    }
}
