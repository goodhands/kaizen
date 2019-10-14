<?php

namespace App\Services\UserServices;

use App\Contracts\UserAccountService;
use App\User;

class ProUserService implements UserAccountService{

    public function menu(){
        return "This is a pro menu!";
    }

}