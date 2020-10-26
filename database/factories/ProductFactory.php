<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'Code'=>$faker->randomNumber(10),
        'Name'=>$faker->name,
        'Scale'=>$faker->randomNumber(10),
        'Vendor'=>$faker->word,
        'PdtDescription'=>$faker->word,
        'QtyInStock'=>$faker->randomNumber(5),
        'BuyPrice'=>$faker->randomNumber(5),
        'MSRP'=>$faker->word,
        'product_line_id'=>\App\Teacher::all()->random()



    ];
});
