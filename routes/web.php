<?php

/*
|--------------------------------------------------------------------------|
| Rotas Web:                                                               | 
|--------------------------------------------------------------------------|
| Aqui é onde você pode registrar rotas da web para seu aplicativo. Esses  |
| as rotas são carregadas pelo RouteServiceProvider dentro de um grupo que |
| contém o grupo de middleware "web". Agora crie algo grande!              |
|                                                                          | 
|--------------------------------------------------------------------------|
*/


use App\category;
use App\Http\Controllers\Controller;
//use Illuminate\Routing\Route;

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
    //$user = \App\User::find(4);

    //dd($user->store()->count()); //retorna um objeto unico.
    //No caso se for muitos pra muitos, ele vai retornar varios dados no caso o objeto da ligação.()Collection();

    //como eu faço pra pegar os produtos de uma loja?
    //$loja = \App\Store::find(4);
    //dd($loja->products());

    //Pegar as categorias de uma loja, ou as Lojas de uma categoria:
    //$categoria =  \App\category::find(1);
    //$categoria->products;  //trabalhando com muitos pra muitos, retornar uma coleção de dados
    //Quando for HasOne ou BelongsTo estariamos retornando o objeto em Questão.
    /*--------------------------------------------------------|
    | 1° Criaremos uma Loja para um Usuario                   |
    | 2° Criaremos um Produto para uma Loja                   |
    | 3° Criar uma Categoria                                  |
    | 4° Adicionar um Produto para uma Categoria ou Vice-Versa|
    |---------------------------------------------------------*/


    //$user = \App\User::find(10);
    //$store = $user->store()->create(
    //    [
    //        'name' => 'Loja Teste',
    //        'description' => 'Loja Teste de Produtos de Informatica',
    //        'mobile_phone' => 'XX-XXXXX-XXXX',
    //        'phone' => 'XX-XXXXX-XXXX',
    //        'slug' => 'loja-teste'

    //    ]);
    //    dd($store);

    //$store = \App\Store::find(41);
    //$product = $store->Products()->create([
    //    'name' => 'Notebook Dell ',
    //    'description' =>'Core I5 10GB',
    //    'body' => 'Qualquer Coisa... ',
    //    'price' =>2999.90,
    //    'slug' => 'notebook-dell'
    //]);
    //dd($product);

    /*$category = \App\category::create([
        'name' => 'games',
        'description' => '',
        'slug' => 'games'
    ]);

    $category = \App\category::create([
        'name' => 'Notebooks',
        'description' => '',
        'slug' => 'Notebooks'
    ]);
 
    dd($category);
    */

    //$product = \App\Product::find(49);
    //adicionar pra esse produto 49 um ID (1);
   

    
    //return \App\category::all();

    return \App\User::all();
    //return \App\User::where('name', 'raimundo dos santos')->get();

});

//Route::get
//Route::post
//Route::put
//Route::patch
//Route::delete
//Route::options

//Então esse metodo que vemos aqui em cima GET, recebendo um parametro, nome da Rota, e um callback no segundo parametro
//serve pra qualquer um desses aqui abaixo ou seja:
/*
1° Get eu recupero as coisas
2° Post eu crio alguma coisa
3° Put Atualização
4° Patch Atulizações
5° Delete Remoção
6° Options ele me retorna quais cabeçalhos aquela rota especifica ela responde.
*/ 
//vamos começar a mapear,


//Organizando as Rotas:

Route::prefix('admin')->namespace('admin')->group(function()
{
Route::prefix('stores')->group(function()
{
Route::get('/','StoreController@index');
Route::get('/create','StoreController@create');
Route::post('/store','StoreController@store');
// criando 02 novas rotas:

Route::get('/{store}/edit','StoreController@edit');
Route::post('/update/{store}','StoreController@update');
Route::get('/destroy/{store}','StoreController@destroy');

    });

});




