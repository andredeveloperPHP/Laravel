<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * inseri dados na nossas migrations ou base de dados.
     *
     * @return void
     */
    public function run()
    {
     /*   DB::table('users')->insert(
        //inserindo as informações de forma manual ta tabela users:

        [
        'name' => 'Administrator',
        'email' => 'Adim@adimin.com.br',
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => 'okokokok'
        ]
    );

    }
    */
    //Executando uma factory: (Userfactory)

    factory(\App\User::class, 40)->create();
    }

}
