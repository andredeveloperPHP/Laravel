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
        return $store;

    }
}
