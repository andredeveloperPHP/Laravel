<!-- Diretivas do blade-->
@extends('layout.app')

<!-- section e uma diretiva do blade -->
@section('content')

<h1>Criar Loja</h1>
<form action="{{route('admin.stores.store')}}" method="POST" enctype="">
    
    <!-- função CSRF-->
    <input type="hidden" name="_token" value="{{csrf_token()}}">
<!-- Nome Loja -->
<div class="form-group">
    <label>Loja</label>
    <input type="text" name="name" class="form-control">
</div>
<!-------------------------------> 

<!-- Descrição -->
<div class="form-group">
    <label>Descrição</label>
    <input type="text" name="description" class="form-control">
</div>
<!--------------------------------->

<!-- telefone -->
<div class="form-group">
    <label>Telefone</label>
    <input type="text" name="phone" class="form-control">
</div>

<!----------------------------------> 

<!-- Celular Whatsapp -->
<div class="form-group">
    <label>Telefone</label>
    <input type="text" name="mobile_phone" class="form-control">
</div>

<!----------------------------------> 

<!-- slug --> 
<div class="form-group">
    <label>Slug</label>
    <input type="text" name="slug" class="form-control">
</div>

<!-----------------------------------> 

<!-- User --->
<div>
    <label>Usuario</label>
    <select name="user" class="form-control">
        @foreach($users as $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>   
</div>

<!------------------------------------>
<br>
<div class="form-control">
    <button type="submit" class="btn btn-lg btn-success">Criar Loja </button>
    
</div>

</form>

@endsection