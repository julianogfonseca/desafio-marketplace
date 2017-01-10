<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
	//relação n para n de produtos e compras
    public function products(){
    	return $this->belongsToMany('App\Product');
    }
	//relação n para n de fornecedores e vendas
    public function suppliers(){
    	return $this->belongsToMany('App\User');    	
    }

    public function setAmount($amount){
    	$this->amount = $amount;
    }
	
	//salva a compra
    public function create($amount){
    	$this->setAmount();
    	$this->save();
    }

}
