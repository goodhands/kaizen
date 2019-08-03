<?php
/**
 * Base class for all photo operations
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    /**
     * the experience convention means 'how you experience the photo'
     */
    public function parent() {
        return $this->morphTo('experience');
    }

    /**
     * fetch the owner of the photo
     */
    public function owner(){
        return $this->belongsTo(User::class);
    }

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
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
