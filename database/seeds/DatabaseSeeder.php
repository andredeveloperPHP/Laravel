<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Semeia a Aplicação dentro da Base de Dados.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(UserTableSeeder::class);  //escolha a classe da sua Seeder com o metodo chamar (call)
    }
}
