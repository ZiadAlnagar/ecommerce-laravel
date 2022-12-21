<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Customer;
use App\Models\Moderator;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('customer', function (User $user) {
            return get_class($user->role) === Customer::class;
        });

        Gate::define('moderator', function (User $user) {
            return get_class($user->role) === Moderator::class;
        });

        Gate::define('admin', function (User $user) {
            return get_class($user->username) === 'ziadalnagdev' && $user->role === Moderator::class;
        });
    }
}
