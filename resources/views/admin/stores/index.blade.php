<table>
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
{{$stores->links()}} 

<?php



?>