<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [


        'Id'=>$faker->randomNumber(10),
        'Name'=>$faker->name,
        'LastName'=>$faker->word,
        'FirstName'=>$faker->word,
        'Phone'=>$faker->word,
        'Adress1'=>$faker->word,
        'Adress2'=>$faker->word,
        'State'=>$faker->word,
        'City'=>$faker->name,
        'PostalCode'=>$faker->randomNumber(10),
        'Country'=>$faker->word,
        'SalesrepEmployeeNum'=>\App\Employee::all()->random()

      

    ];
});
