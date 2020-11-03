<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FoodType;
use Faker\Generator as Faker;

$factory->define(FoodType::class, function (Faker $faker) {
    return [
        'descrip' => strtoupper($faker->words(rand(3, 5), true)),
        'abrev' => strtoupper($faker->stateAbbr),
    ];
});
