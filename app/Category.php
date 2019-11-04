<?php

namespace App;

use App\Photo;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getRouteKeyName(){
        return 'slug';
    }

    public function photos(){
        return $this->hasMany(Photo::class);
    }

    /**
     * Fetch the people the current user follows that has
     * posted in this category
    */
    public function peopleYouKnow(){
        
    }
}
