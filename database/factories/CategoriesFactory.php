<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categories;
use Faker\Generator as Faker;

$factory->define(Categories::class, function (Faker $faker) {
    return [
        'id'=>$faker->randomNumber(10),
        'name'=>$faker->word,
        



    ];
});
