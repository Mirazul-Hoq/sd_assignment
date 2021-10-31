<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'brand_name' => $faker->word,
        'category' => $faker->word,
        'details' => $faker->realText,
        'stock' => $faker->numberBetween($min = 100, $max = 200),
        'price' => $faker->numberBetween($min = 1000, $max = 3000),
    ];
});
