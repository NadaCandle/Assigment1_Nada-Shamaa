<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order_Product;
use Faker\Generator as Faker;

$factory->define(Order_Product::class, function (Faker $faker) {
    return [
        'id'=>$faker->randomNumber(10),
        'QTY'=>$faker->randomNumber(10),
        'PriceEach'=>$faker->randomNumber(10),


        'Order_id'=>\App\Order::all()->random(),
        'Product_Code' =>\App\Product::all()->random()
        
    
    ];
});
