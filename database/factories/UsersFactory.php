<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Users;
use Faker\Generator as Faker;

$factory->define(Users::class, function (Faker $faker) {
    return [
        'id'=>$faker->randomNumber(10),
        'firstName'=>$faker->word,
        'lastName'=>$faker->word,
        'phone'=>$faker->randomNumber,
        'adress'=>$faker->word,
        'email'=>$faker->email,
        'country'=>$faker->word,
        'accountNumber'=>$faker->randomNumber(10)
        

    ];
});
