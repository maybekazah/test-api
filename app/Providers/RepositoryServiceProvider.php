<?php

namespace App\Providers;

use App\Repositories\Abstract\IUserRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            IUserRepository::class,
            UserRepository::class,
        );
    }
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
