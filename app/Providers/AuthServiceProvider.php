<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\User;


class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [];

    public function boot()
    {
        $this->registerPolicies();

        Gate::before(function ($user, $ability) {
            return $user->abilities()->contains($ability);
        });

        // Gate::define('update', function (User $user, $field) {
        //     return $field->user->is($user);
        // });
    }
}
