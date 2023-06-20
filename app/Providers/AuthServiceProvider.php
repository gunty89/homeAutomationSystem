<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
// use Illuminate\Auth\Access\Gate;
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

        Gate::define('userCreate', fn(User $user) => $user -> isAdmin);
        Gate::define('userDelete', fn(User $user) => $user -> isAdmin);
        Gate::define('deviceCreate', fn(User $user) => $user -> isAdmin);
        Gate::define('deviceDelete', fn(User $user) => $user -> isAdmin);
        Gate::define('userAction', fn(User $user) => $user -> isAdmin);
        // Gate::define('deviceDelete', fn(User $user) => $user -> isAdmin);


        //
    }
}
