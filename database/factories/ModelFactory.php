<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Personas::class, function (Faker\Generator $faker) {

    return [
        'nombre' => $faker->name,
        'dni' => $faker->numberBetween($min = 1000000, $max = 4100000),
        'edad' => $faker->numberBetween($min = 18, $max = 80),
        'trabajo'=> $faker->jobTitle,
        'descripcionProblema'=> $faker->text($maxNbChars = 150),
    ];
});
