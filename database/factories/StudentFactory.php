<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name($gender = 'male'|'female'),
    	'email' => $faker->companyEmail,
        'password' => md5('123456'),
        'role' => $faker-> randomElement($array = array ('admin','teacher','student')),
    	'address' => $faker->address,
    	'country' => $faker->country,
    	'city' => $faker->city,
    	'semester_fee' => $faker->numberBetween($min = 40000, $max = 45000),
    	'birth_date' => $faker->date($format = 'Y-m-d', $max = '2000-12-12'),
    	'credit_card_no' => $faker->creditCardNumber,
        'image' => $faker->numberBetween($min = 1, $max = 5).'.'.'jpg',
    ];
});
