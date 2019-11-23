<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Client;
use Faker\Generator as Faker;


$factory->define(Client::class, function (Faker $faker) {
    return [
         
       'name' => $faker->name,
        'firstname' => $faker->firstname,
         'address' => $faker->address,
         'email' => $faker->email,
        
         
    ];
});
