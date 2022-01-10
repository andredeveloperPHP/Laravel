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
    
    //mass assingned: 
    //espera um array associativo, contendo o nome das colunas e os valores que queremos salvar no banco.
    //$user = \app\User::create([
    //    'name' => 'raimundo dos santos',
    //    'email'=> 'raimundo@email.com.br',
    //    'password'=> bcrypt('123456119')
    //]);

    //Mass Update:

    
    //dd($user);  metodo Dump Die que retorna o metodo de criação.
    //para entendermos o que este metodo nos retornara quando criarmos o usuario.
    /*
    $id = 43;
    $user = \app\user::where('id',$id)->update([
        'name' => "Andre Laravel 6 "

    ]);
    */
    //return \App\user::all();
    return \App\User::all();
    //return \App\User::where('name', 'raimundo dos santos')->get();



});
