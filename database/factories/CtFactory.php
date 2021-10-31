<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ctmark;
use Faker\Generator as Faker;

$factory->define(Ctmark::class, function (Faker $faker) {
    return [
        'roll' => $faker->numberBetween($min = 1603110201163, $max = 1603110201221),
        'name' => $faker->name($gender = 'male'|'female'),
        'ct_01' => $faker->numberBetween($min = 0, $max = 10),
        'ct_02' => $faker->numberBetween($min = 0, $max = 10),
    ];
});
