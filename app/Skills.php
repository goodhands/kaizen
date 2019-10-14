<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{

    protected $fillable = [
        'label', 'slug',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user(){
        return $this->belongsToMany(User::class);
    }

    public function path($skill = null){
        return isset($skill) ? str_replace(" ", "-", $skill) : "/skills/".$this->slug;
    }
}
