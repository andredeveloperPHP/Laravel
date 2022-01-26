@extends('layout.app')

@section('content')
        <table class="table table-striped">
            <th>#</th>
            <th>Loja</th>
            
            <th>Ações</th>

        </table>
        <tbody>

        @foreach($stores as $store)
        <tr>
                <td>{{$store->id}}</td>
                <td>{{$store->name}}</td><br>
                <td></td>
            </tr>

        @endforeach
        </tbody>
        </table>
        
        {{$stores->links()}}
@endsection
<?php



?>