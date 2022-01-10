<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable; //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [  //metodo necessario para passar Mass Assigned
        'name', 'email', 'password',
    ];
   
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
       
    ];

    public function store(){
        return $this->hasOne(Store::class); //tem um  1:1 pra um (um Usuario pode ter uma Loja)

    }
    /*-----------------------------------------------------------------------------|
    | Estou em User, e ele tem uma ligação de 1 pra 1                              |
    | com loja que e representada pelo Model= Store                                |  
    | então:                                                                       |
    | Crio um Metodo chamado Store pra representar essa ligação.                   |
    | Ele vai me retornar um metodo do Eloquent que representa que esse usuario    |
    | tem uma loja, no caso hasOne->(nome da loja no primeiro parametro);          |
    |                                                                              |
    \*-----------------------------------------------------------------------------|
*/


}
