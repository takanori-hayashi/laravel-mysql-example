<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Todo;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'title' => $faker->realText($faker->numberBetween(10, 20)),
        'description' => $faker->realText($faker->numberBetween(50, 100)),
        'completed' => $faker->boolean(50),
    ];
});
