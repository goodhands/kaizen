<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\User;
use App\Model;
use App\Social;
use Faker\Generator as Faker;

$factory->define(Social::class, function (Faker $faker) {
    return [
        'social_title' => array_random([
            'Facebook',
            'Twitter',
            'Dribbble',
            'Behance',
            'Website'
        ]),

        'social_icon' => array_random([
            'http://127.0.0.1:8000/images/favorite-line.svg',
            'http://127.0.0.1:8000/images/favorite-line.svg',
            'http://127.0.0.1:8000/images/favorite-line.svg',
            'http://127.0.0.1:8000/images/favorite-line.svg',
            'http://127.0.0.1:8000/images/favorite-line.svg'
        ]),

        'social_url' => '#',
        'user_id' => function(){
            return factory(User::class)->create()->id;
        }
    ];
});
