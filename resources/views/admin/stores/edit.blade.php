<!-- Diretivas do blade-->
@extends('layout.app')

<!-- section e uma diretiva do blade -->
@section('content')

<h1>Criar Loja</h1>
<form action="/admin/stores/update/{{$store->id}}" method="POST" enctype="">
    <!-- função CSRF-->
    <input type="hidden" name="_token" value="{{csrf_token()}}">

<!-- Nome Loja -->
<div class="form-group">
    <label>Loja</label>
    <input type="text" name="name" class="form-control" value=""{{$store->name}}>
</div>
<!-------------------------------> 

<!-- Descrição -->
<div class="form-group">
    <label>Descrição</label>
    <input type="text" name="description" class="form-control"  value=""{{$store->description}}>
</div>
<!--------------------------------->

<!-- telefone -->
<div class="form-group">
    <label>Telefone</label>
    <input type="text" name="phone" class="form-control"  value=""{{$store->phone}}>
</div>

<!----------------------------------> 

<!-- Celular Whatsapp -->
<div class="form-group">
    <label>Telefone</label>
    <input type="text" name="mobile_phone" class="form-control"  value=""{{$store->mobile_phone}}>
</div>

<!----------------------------------> 

<!-- slug --> 
<div class="form-group">
    <label>Slug</label>
    <input type="text" name="slug" class="form-control" value=""{{$store->slug}}>
</div>
<!-----------------------------------> 
<!-------------- Como o usuario tera só uma loja não terei isto ----------------->
<br>
<div class="form-control">
    <button type="submit" class="btn btn-lg btn-success">Atualizar Loja </button>
    
</div>

</form>

@endsection
<!------------------------- fim da section ----------------------------->