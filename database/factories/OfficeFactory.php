<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Office;
use Faker\Generator as Faker;

$factory->define(Office::class, function (Faker $faker) {
    return [
        'Code'=>$faker->randomNumber(10),
        'City'=>$faker->name,
        'Phone'=>$faker->word,
        'Adress1'=>$faker->word,
        'Adress2'=>$faker->word,
        'State'=>$faker->word,
        'Country'=>$faker->word,
        'PostalCode'=>$faker->randomNumber(10),
        'Territory'=>$faker->word

    ];
});
