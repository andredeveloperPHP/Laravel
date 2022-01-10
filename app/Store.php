<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['name','description', 'phone', 'mobile_phone','slug'];
    //referenciando o Model User
  public function user(){
      return $this->belongsTo(User::class);   //Uma Loja pode ter muitos Produtos 1:N  Um para Muitos;
  }   //ele irá procurar do User_id
   //referenciando o Model Product
  public function Product(){      
      return $this->hasMany(Product::class); //tem muitos passando o model Objeto Product.
  }
}


/*----------------------------------------------------------------------------------|
| faço o inverso de lá de Store para User, O User vai ser dono da Loja, então       |   
| Essa loja vai pertencer ao usuario, metodo belongTo que vai receber um Model User |
| O User ele tem uma loja que e representada pelo model Store.                      |
| //Esse Model store pertence para User                                             |
|                                                                                   |
|                                                                                   |
|                                                                                   |
|                                                                                   | 
|                                                                                   |
|-----------------------------------------------------------------------------------|

/*--------------------------------------------------------------------------------|
| DEFINIÇÃO SOBRE ELOQUENT E A CLASSE MODELS                                      |
|---------------------------------------------------------------------------------|
| -> Ele vai procurar como stores la no banco de dados                            |
| -> Store->store                                                                 |
| ->ele vai procurar como Products no banco, Automaticamente                      |
| ->Product->Products                                                             |
|---------------------------------------------------------------------------------*/

?>

