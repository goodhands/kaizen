<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'label' => $faker->firstNameFemale,
        'slug' => $faker->firstNameFemale
    ];
});
