<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	//classe User é equivalente ao fornecedor

    //relação 1 para n de produtos e fornecedores
    public function products(){
        return $this->hasMany('App\Product');
    }

    //getters e setters

    public function getName(){
    	return $this->name;
    }

    public function getType(){
    	return $this->type;
    }    

    public function getProducts(){
    	return $this->products;
    }

}
