<?php

use Carbon\Factory;
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
    
    factory(\App\User::class, 40)->create()->each(function($user){
         $user->store()->save(factory(\App\Store::class)->make());
        

    });
    }

}
