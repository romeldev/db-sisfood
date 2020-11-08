<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\IngredientType;
use Faker\Generator as Faker;

$factory->define(IngredientType::class, function (Faker $faker) {
    return [
        'descrip' => strtoupper($faker->words(rand(3, 5), true)),
        'abrev' => strtoupper($faker->stateAbbr),
    ];
});
