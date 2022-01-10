<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\category::class, function (Faker $faker) {
    return [
        //Definindo as factorys:
        'name' => $faker->name,
        'description' => $faker->sentence,
        'slug' => $faker->slug

        
    ];
});
