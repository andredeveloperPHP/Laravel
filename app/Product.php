<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','body','price','slug'];
    public function store(){
        //Esse Produto vai pertencer a quem: a Loja Store.
        return $this->belongsTo(Store::class);  //Um produto pode ter em varias lojas 
    }

    public function categories(){
        return $this->belongsToMany(category::class); //que significa muitos com quem, com category::class
    }

    }
/*--------------------------------------------------------------------------------|
| DEFINIÇÃO SOBRE ELOQUENT E A CLASSE MODELS                                      |
|---------------------------------------------------------------------------------|
| -> Ele vai procurar como stores la no banco de dados                            |
| -> Store->store                                                                 |
| ->ele vai procurar como Products no banco, Automaticamente                      |
| ->Product->Products                                                             |
| ->Mas se eu tenho o nome da tabela diferente, posso chamar a propriedade,       |
| ->protected $table - 'lojas'; se fosse esse nome da tabela.                     |
| NOTA: O laravel sempre vai tentar procurar com base no seu Model, o plural do   |
| Model na BASE DE DADOS.                                                         |
/*--------------------------------------------------------------------------------|




