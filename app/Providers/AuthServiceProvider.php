<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use App\Policies\PostPolicy;
use Illuminate\Support\Facades\Gate;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Post::class => PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {

        $this->registerPolicies();

        Gate::define('edit-user', function (User $user) {
            if ($user->roles->containsStrict('id', 3)) {
                return true;
            }
            return false;
        });

        Gate::define('create-user', function (User $user) {
            if ($user->roles->containsStrict('id', 3)) {
                return true;
            }
            return false;
        });

        Gate::define('delete-user', function (User $user) {
            if ($user->roles->containsStrict('id', 3)) {
                return true;
            }
            return false;
        });

    }
}
