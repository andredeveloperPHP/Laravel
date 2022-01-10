<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['name','description','slug'];
    
    //criando uma classe que referencia Product::class
    public function products(){
        return $this->belongsToMany(Product::class); 
    }

/*-------------------------------------------------------------------------|
| vai ter um convensão aqui, pra ambos os arquivos                         |
| category.php e Product.php                                               | 
| O Laravel vai tentar procurar um tabela Pivo ou intermediaria que        |
| respeite o nome dos Models  (em ordem Alfabetica) emtão ele vai procurar |
| Isto aqui no banco: category_product.                                    |
| Como eu faria, pra procurar a tabela, que eu quero, o belongsToMany,     |
| vai receber um segundo parametro.                                        |
---------------------------------------------------------------------------|

*/

}

