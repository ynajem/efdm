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

        // Gate::define('update', function (User $user, $field) {
        //     if ($field->user->is($user)) {
        //         return True;
        //     }
        // });

        Gate::before(function ($user, $ability) {
            if ($user->abilities()->contains($ability)) {
                return True;
            };
        });
    }
}
