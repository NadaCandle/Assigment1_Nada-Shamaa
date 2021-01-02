<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
       
        'id'=>$faker->randomNumber(10),
        'name'=>$faker->word,
        'quantity'=>$faker->randomNumber(10),
        'price'=>$faker->randomNumber(10),

        'Companies_id'=>\App\Companies::all()->random(),
        'Categories_id'=>\App\Categories::all()->random()


    ];
});
