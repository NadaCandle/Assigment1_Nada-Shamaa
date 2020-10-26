<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'CheckNum'=>$faker->word,
        'PaymentDate'=>$faker->randomNumber(10),
        'Amount'=>$faker->randomNumber(10),
        'Customer_id'=>\App\Customer::all()->random()


        

    ];
});
