<?php

namespace App\Services\UserServices;

use App\Contracts\UserAccountService;
use App\User;

class FreeUserService implements UserAccountService{

    public function menu(){
        return "This is a free menu!";
    }

    public function hello(){
        return "this is my own free Jello method!";
    }

}