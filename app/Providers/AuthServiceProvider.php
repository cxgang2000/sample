<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\Models\User;
use App\Models\Status;
use App\Policies\UserPolicy;
use App\Policies\StatusPolicy;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
	 
	 /*
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
		\App\Models\User::class  => \App\Policies\UserPolicy::class,
    ];
	*/
	
	protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        User::class  => UserPolicy::class,
        Status::class  => StatusPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
	 
	 /*
    public function boot()
    {
        $this->registerPolicies();

        //
    }
	*/
	
	public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        //
    }
}
