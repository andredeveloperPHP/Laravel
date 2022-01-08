<?php

/*
|--------------------------------------------------------------------------
| Rotas Web:
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*...*/

Route::get('/', function () {
    return view('welcome');
});
    /*---------------------------------------------------------
    | O active Record permite trabalhar as colunas do banco
    | como se fosse atributos da minha classe:
    | existe uma função do laravel chamada bcrypt() que
    | encrypta o password
    | O metodo Save() salva os arquivos dentro do banco de dados
    | Retornando, o App\User::all()  Mostra a alteração dos Dados;
    |----------------------------------------------------------*/
    
Route::get('/models', function(){
    $user  = new \App\User();
    
    //Posso chamar todos os usuarios chamando o metodo All

    //return \App\User::all();  //Todos os usuarios
    //return \App\User::find(3); //Posso buscar um unico usuario por exemplo o 3 com base no ID;
    //return \App\User::where('name', "Jazmyne Bernier I")->get(); //SELECT * FROM users WHERE name = 'Jazmyne Bernier I';
    //return \App\User:?where('name', "Jazmyne Bernier I")->first; // Retorna o primeiro resultado com o metodo first(); 
    //podemos retornar um resultado Paginado com os links disponiveis

    return \App\User::all();


});
