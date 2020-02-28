<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    public function followers(User $username){
        return $username->followers()->get();
    }

    public function follow(User $username){
        return Auth::user()->follow($username);
    }

    public function following(User $username){
        return $username->followings(User::class)->get();
    }

    public function toggleFollow(User $username){
        return Auth::user()->toggleFollow($username);
    }

    public function unfollow(User $username){
        return Auth::user()->unfollow($username);
    }

    public function currentUser(){
        return Auth::user();
    }

    public function category(Category $category){
        return $category->photos;
    }
}
