<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class UserAccountServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(){
        $this->app->call([$this, 'registerUserService']);
    }

    private $userTypes;
    private $user;

    public function registerUserService(User $user){

        $this->user = $user;

        $this->userTypes = [
            'Free' => 'App\Services\UserServices\FreeUserService',
            'Pro' => 'App\Services\UserServices\ProUserService',
            'Team' => 'App\Services\UserServices\FreeUserService'
        ];

        $this->app->bind('App\Contracts\UserAccountService', $this->userTypes['Free']);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
