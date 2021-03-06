<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //criando a 1 Migração: php artisan make:migration [Nome da tabela]; //
        
        Schema::create('stores', function (Blueprint $table) {
            //colunas da minha tabela stores:
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('description');
            $table->string('phone');
            $table->string('mobile_phone');
            $table->string('slug');

            $table->timestamps();
            //definindo a chave estrangeira
            $table->foreign('user_id')->references('id')->on('users'); //nome_da_tabela('stores')_nome_da_coluna(user_id) adicionando uma chave estrangeira;
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
