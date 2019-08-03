<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    /**
     * Like a photo
     */
    public function like($user = null){
        $user = $user ?: auth()->user();

        return $this->likes()->attach($user);
    }

    /**
     * Fetch the likes a post has
     */
    public function likes(){
        return $this->morphToMany(User::class, 'likable')->withTimestamps();
    }
}
