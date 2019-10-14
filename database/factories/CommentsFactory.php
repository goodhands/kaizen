<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comments;
use Faker\Generator as Faker;

$factory->define(Comments::class, function (Faker $faker) {
    return [
        'comment' => $faker->text(),
        'user_id' => 1,
        'photo_id' => function(){
            return factory(Photo::class)->create()->id;
        }
    ];
});
