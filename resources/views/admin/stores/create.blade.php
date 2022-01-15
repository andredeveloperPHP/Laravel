<h1>Criar Loja</h1>
<form action="/admin/stores/store" method="POST" enctype="">
    <!-- função CSRF-->
    <input type="hidden" name="_token" value="{{csrf_token()}}">
<!-- Nome Loja -->
<div>
    <label>Loja</label>
    <input type="text" name="name">
</div>
<!-------------------------------> 

<!-- Descrição -->
<div>
    <label>Descrição</label>
    <input type="text" name="description">
</div>
<!--------------------------------->

<!-- telefone -->
<div>
    <label>Telefone</label>
    <input type="text" name="phone">
</div>

<!----------------------------------> 

<!-- Celular Whatsapp -->
<div>
    <label>Telefone</label>
    <input type="text" name="mobile_phone">
</div>

<!----------------------------------> 

<!-- slug --> 
<div>
    <label>Slug</label>
    <input type="text" name="slug">
</div>

<!-----------------------------------> 

<!-- User --->
<div>
    <label>Usuario</label>
    <select name="user">
        @foreach($users as $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>   
</div>

<!------------------------------------>

<div>
    <button type="submit">Criar Loja</button>
    
</div>

</form>