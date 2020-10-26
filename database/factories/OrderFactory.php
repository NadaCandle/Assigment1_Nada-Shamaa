<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
 
        'id'=>$faker->randomNumber(10),
        'PaymentDate'=>$faker->randomNumber(10),
        'RequiredDate'=>$faker->randomNumber(10),
        'ShippedDate'=>$faker->randomNumber(10),
        'Status'=>$faker->randomNumber(10),
        'Comments'=>$faker->word,

        'Customer_id'=>\App\Customer::all()->random()
        

    ];
});
