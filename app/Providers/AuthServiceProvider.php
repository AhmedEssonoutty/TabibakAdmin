<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Constants\RoleNameConstants;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->registerPolicies();
        foreach(config("global.permissions") as $ability => $value){
            Gate::define($ability, function($auth) use ($ability){
                return $auth->hasAbility($ability);
            });
        }
        Gate::before(function ($user, $ability) {
            return $user->hasRole(RoleNameConstants::SUPER_ADMIN->value) ? true : null;
        });
    }
}
