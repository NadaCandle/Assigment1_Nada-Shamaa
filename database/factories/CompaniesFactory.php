<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Companies;
use Faker\Generator as Faker;

$factory->define(Companies::class, function (Faker $faker) {
    return [
        
        'id'=>$faker->randomNumber(10),
        'name'=>$faker->word,
        'deal_start'=>$faker->Date,
        'deal_ends'=>$faker->Date,
        'profit'=>$faker->randomNumber(10),
        'taxes'=>$faker->randomNumber(10)
        
        
    

    ];
});
