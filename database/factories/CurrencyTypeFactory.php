<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CurrencyType;
use Faker\Generator as Faker;

$factory->define(CurrencyType::class, function (Faker $faker) {
    return [
        'descrip' => strtoupper($faker->words(rand(1, 2), true)),
        'symbol' => strtoupper($faker->randomLetter),
    ];
});
