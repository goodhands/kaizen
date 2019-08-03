<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Photo;
use Faker\Generator as Faker;

$factory->define(Photo::class, function (Faker $faker) {
    return [
        'title' => $faker->streetName,
        'description' => $faker->text(),
        'user_id' => '1',
        'slug' => 'photo-slug',
        'asset_url' => '/photo/photo-slug'.$faker->randomLetter,
        'upload_speed' => '0.4s',
        'experience_type' => 'App\Commons',
        'experience_id' => '1'
    ];
});
