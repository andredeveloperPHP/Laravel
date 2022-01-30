@extends('layout.app')

@section('content')
        <hr>
        <br>
         

       <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Loja</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>

                @foreach($stores as $store)
                    <tr>
                        <td>{{$store->id}}</td>
                        <td>{{$store->name}}</td>
                        <td>
                            <a href="{{route('admin.stores.edit', ['store' => $store->id])}}" class="btn btn-sm btn-warning">EDITAR</a>
                            <a href="{{route('admin.stores.destroy', ['store' => $store->id])}}" class="btn btn-sm btn-danger">REMOVER</a>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
       {{$stores->links()}}
    </thead>
@endsection
