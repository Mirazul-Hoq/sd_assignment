<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Prolist;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Prolist::class, function (Faker $faker) {
	$categorys = Category::all()->pluck('id')->toArray();
    return [
        'title' => Str::Random(10),
        'price' => $faker->numberBetween($min = 1000, $max = 2000),
        'category_id' => $faker->randomElement($categorys),

    ];
});
