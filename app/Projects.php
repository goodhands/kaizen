<?php
/**
 * Base
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    public function photos(){
        return $this->morphMany(Photo::class, 'experience');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
