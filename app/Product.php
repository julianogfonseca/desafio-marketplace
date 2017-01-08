<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	//relação n para n de produtos e compras
	public function purchases(){
		return $this->belongsToMany('App\Purchase');
	}
	//relação 1 para n de produto e fornecedor
    public function user(){
    	return $this->belongsTo('App\User');
    }

    //getters e setters

    public function getName(){
    	return $this->name;
    }

    public function getImg(){
    	return $this->img;
    }

    public function getDescription(){
    	return $this->description;
    }

    public function getValue(){
    	return $this->value;
    }

    public function getUser(){
    	return $this->user;
    }

}
