<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

// Temos aqui uma definição:

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});


/*
|*--------------------------------------------------------------------------------------
| As factorys definem modelos para que possa fazer criação de uma massa grande de dados 
| Uma vez que tenho definição de modelo que eu quero.
| Posso criar 100 usuarios de uma vez só
| Quem ira rodar dentro de um seed;
| exemplo basico de utilização dentro do Seed:
| definição do namespace, quantidade de registros, e o metodo create.
|  factory(\App\User::class, 40)->create()
|---------------------------------------------------------------------------------------
 */