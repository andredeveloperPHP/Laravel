<?php

use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stores = \App\Store::all();

        foreach($stores as $store):
           $store->Product()->save(factory(\App\Product::class)->make());
    endforeach;
    //chamando a ligação de store com o product, chamando o save, e passando nossa factory com o make no modulo product
        
    }
}

?>
