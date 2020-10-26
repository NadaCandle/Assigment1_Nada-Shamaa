<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        
        'Id'=>$faker->randomNumber(10),
        'Reports_To'=>$faker->randomNumber(10),
        'LastName'=>$faker->word,
        'FirstName'=>$faker->word,
        'Extension'=>$faker->word,
        'Email'=>$faker->word,
        'JobTitle'=>$faker->word,
        'Office_Code'=>\App\Office::all()->random()
        
    
    ];
});
