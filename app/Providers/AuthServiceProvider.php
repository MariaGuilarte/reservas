<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        'App\User' => 'App\Policies\UserPolicy',
        'App\Operator' => 'App\Policies\OperatorPolicy',
        'App\Client' => 'App\Policies\ClientPolicy',
        'App\Professional' => 'App\Policies\ProfessionalPolicy',
        'App\Category' => 'App\Policies\CategoryPolicy',
        'App\Enterprise' => 'App\Policies\EnterprisePolicy',
        'App\Service' => 'App\Policies\ServicePolicy',
        'App\Reservation' => 'App\Policies\ReservationPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
