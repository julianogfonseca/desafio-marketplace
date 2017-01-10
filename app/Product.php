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
    	return floatval($this->value)  ;
    }

    public function getUser(){
    	return $this->user;
    }

    public function getProducts(){
        return Product::all();
    }

    public function getFreight(){
        return floatval($this->freight);
    }

    public function amount($productsToCalc){
        $prod = new Product();
        $amount = 0;
        foreach($productsToCalc as $product){
            $amount += $product->getValue() + 42;
        }
        return $amount * 100.0;
    } 

}
