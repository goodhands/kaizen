<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    public function valid(){
        return $this->token;
    }

    public function getRouteKeyName(){
        return 'token';
    }
}
