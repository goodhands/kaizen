<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Photo;
use Faker\Generator as Faker;

$factory->define(Photo::class, function (Faker $faker) {
    return [
        'title' => $faker->streetName,
        'description' => $faker->text(),
        'user_id' => array_random(
            User::all()->id
        ),
        'slug' => 'photo-slug',
        'asset_url' => array_random([
            'http://127.0.0.1:8000/images/user.jpg',
            'http://127.0.0.1:8000/images/art-asian-buffalo-46152.jpg',
            'http://127.0.0.1:8000/images/art-ball-ball-shaped-235615.jpg',
            'http://127.0.0.1:8000/images/joanna-kosinska-129039-unsplash.jpg',
            'http://127.0.0.1:8000/images/photo-1493414307931-f6f5861f5029.jpg'
        ]),
        'upload_speed' => '0.4s',
        'experience_type' => 'App\Commons',
        'experience_id' => '1'
    ];
});
