<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'name' => $faker->name($gender = 'male'|'female'),
    	'email' => $faker->companyEmail,
        'password' => md5('123456'),
        'birth_date' => $faker->date($format = 'Y-m-d', $max = '2000-12-12'),
        'salary' => $faker->numberBetween($min = 4000, $max = 10000),
    ];
});
