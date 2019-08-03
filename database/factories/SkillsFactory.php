<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Skills;

$factory->define(Skills::class, function (Faker $faker) {
    return [
        'label' => $faker->jobTitle,
        'slug' => str_replace(" ", "-", $faker->jobTitle),
    ];
});
