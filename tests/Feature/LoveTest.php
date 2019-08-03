<?php

namespace Tests\Feature;

use App\User;
use App\Photo;
use App\Comments;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoveTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function user_can_like_a_photo(){

        $this->actingAs(factory(User::class)->create());

        $photo = factory(Photo::class)->create();

        $photo->like();

        $this->assertCount( 1, $photo->likes );
        $this->assertTrue( $photo->likes->contains('id', auth()->id() ) );
    }

    /** @test */
    public function a_comment_can_be_liked(){
        $this->actingAs(factory(User::class)->create());

        $comment = factory(Comments::class)->create();

        $comment->like();

        $this->assertCount( 1, $comment->likes );
        $this->assertTrue( $comment->likes->contains('id', auth()->id() ) );
    }
}
