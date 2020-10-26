<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductLine;
use Faker\Generator as Faker;

$factory->define(ProductLine::class, function (Faker $faker) {
    return [
        'DesclnText'=>$faker->name,
        'DesclnHtml'=>$faker->name,
        'Image'=>$faker->name,
    ];
});
