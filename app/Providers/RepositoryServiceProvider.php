<?php

namespace App\Providers;

use App\Repositories\Abstract\IUserRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public array  $bindings = [
        IUserRepository::class => UserRepository::class,
    ];

}

