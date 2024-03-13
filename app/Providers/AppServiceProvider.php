<?php

namespace App\Providers;

use App\Http\Resources\UserResource;
use App\Services\Abstract\IAuthLoginService;
use App\Services\Abstract\IAuthService;
use App\Services\Abstract\IAuthRestoreConfirmService;
use App\Services\Abstract\IAuthRestoreService;
use App\Services\AuthLoginService;
use App\Services\AuthService;
use App\Services\AuthRestoreConfirmService;
use App\Services\AuthRestoreService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public array $bindings = [

        IAuthService::class => AuthService::class,

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
