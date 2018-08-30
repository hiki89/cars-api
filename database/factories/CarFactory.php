<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'brand' => $faker->word,
        'model' => $faker->word,
        'year' => $faker->numberBetween(2000, 2018),
        'maxSpeed' => $faker->numberBetween(200, 400),
        'isAutomatic' => $faker->boolean($chanceOfGettingTrue = 50),
        'engine' => $faker->randomElement(['diesel','petrol','electric']),
        'numberOfDoors' => $faker->numberBetween(2, 5)
    ];
});