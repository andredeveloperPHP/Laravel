<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Store::class, function (Faker $faker) {
    return [
         //Gerando as factorys para Auxiliar nas Nossas Seeds   
        'name' => $faker->name,
        'description' => $faker->sentence,
        'phone' => $faker->phoneNumber(),
        'mobile_phone' => $faker->phoneNumber(),
        'slug' => $faker->slug,
     
    ]; 
});
