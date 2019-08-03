<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contracts\UserAccountService;
class UserController extends Controller
{

    protected $user;
    
    public function __construct(UserAccountService $user){
        $this->user = $user;      
    }

    public function menu(){
        return $this->user->menu();
    }

    public function username(){
        return Auth::user()->username;
    }

    public function profile(User $username){
        Auth::loginUsingId($username->id);  
        return view("user.profile", [
            "user" => $username
        ]);
    }

    public function following(User $username){
        return view("user.following", [
            "user" => $username
        ]);
    }

    public function followers(User $username){
        return view("user.followers", [
            "user" => $username
        ]);
    }

    public function photos(User $username){
        return $username->photos;
    }
}
