<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Overtrue\LaravelFollow\Traits\CanFollow;
use Overtrue\LaravelFollow\Traits\CanBeFollowed;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use CanFollow, CanBeFollowed;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * This method is an internal method that determines whether the loggedin user is Pro or Not.
     * @return 1 or 0
     */
    public function is_pro(){
        return $this->is_pro == 1 ? true : false;
    }

    /**
     * This method is an internal method that determines whether the loggedin user is part of a team or Not.
     * @return 1 or 0
     */
    public function is_team(){
        return $this->account_type == "Team" ? true : false;
    }

    /**
     * @return String [Free, Pro, Team]
     */
    public function account_type(){
        Auth::loginUsingId(2);
        return $this->account_type;
    }

    public function getRouteKeyName(){
        return 'username';
    }

    public function fullname(){
        return $this->firstname ." ". $this->lastname;
    }

    public function defaultSkillPath(){
        // return $this->skills()->
    }

    /**
     * Relationship with other Models
     */
    public function photos(){
        return $this->hasMany(Photo::class)->where("experience_type", "App\Commons");
    }

    public function projects(){
        return $this->hasMany(Projects::class)->where("experience_type", "App\Projects");
    }

    public function skills(){
        return $this->belongsToMany(Skills::class, 'skill_user', 'user_id', 'skill_id')->withTimestamps();
    }

    public function socials(){
        return $this->hasMany(Social::class);
    }
    /**
     * End Relationships
     */
}
