<?php

namespace Tests\Unit;

use App\User;
use App\Photo;
use Tests\TestCase;
use Illuminate\Support\Facades\Event;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    Use RefreshDatabase;

    /** @test */
    public function user_is_a_pro(){

        $user = factory("App\User")->create();

        $this->actingAs($user);

        $this->assertEquals($user->is_pro, $user->is_pro());
    }

    /** @test */
    public function user_can_view_login_form(){
        $this->get('/auth/login')->assertStatus(200)->assertSeeText("Sign in");
    }

    /** @test */
    public function user_profile_exists(){
        $user = factory("App\User")->create();

        $this->get("/".$user->username)->assertStatus(200)
        ->assertSeeText($user->firstname ." ".$user->lastname)
        ->assertViewHasAll([
            'profession' => $user->profession,
            'bio' => $user->bio,
            'avatar' => $user->avatar,
            'username' => $user->username
        ]);
    }

    /** @test */
    public function user_follower_count(){

    }

    /** @test */
    public function user_can_follow_a_user(){

    }
}
