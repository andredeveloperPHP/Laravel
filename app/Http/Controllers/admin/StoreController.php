<?php
//aqui são os meus metodos do meu controllers:

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\Framework\ComparisonMethodDoesNotDeclareExactlyOneParameterException;

class StoreController extends Controller
{
    // Controllers, onde iniciaremos nossos cruds
    public function index()
    {
        $stores = \App\Store::paginate(10);

        return view('admin.stores.index', compact('stores'));
               
    }

    public function create(){
        $users = \App\User::all(['id','name']); //passo um array e os nomes dos campos

        return view('admin.stores.create', compact('users'));
    }

    //metodo de processamento de criação:

    public function store(Request $request)
    {
        $data = $request->all();


        $user = \App\User::find($data['user']);
        $store = $user->store()->create($data);
       flash('Loja Criada com Sucesso')->success();
       return redirect()->route('admin.stores.index');

    }

    //criação de outro metodo

    public function edit($store){

        $store = \App\User::find($store);

        return view('admin.stores.edit', compact('store'));

    }

    public function update(Request $request, $store){
       
        $data = $request->all(); //estou dando um dump die aqui pra visualizar
        
        $store = \App\Store::find($store);
        $store->update($data);

        flash('loja Atualizada com sucesso ')->success();
        return redirect()->route('admin.stores.index');


        //return view('admin.store.update', compact('update'));
    }

    //metodo de remoção:

    public function destroy($store)
    {
        $store = \App\Store::find($store);
        $store->delete();

        flash('loja removida com sucesso')->success();
        return redirect()->route('admin.stores.index');

        //Será redirecionado para nossa tabela nossa Listagem.
             
    }
}
