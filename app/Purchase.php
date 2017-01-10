<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PagarMe;
use PagarMe_Transaction;

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
	

    public function makeTransaction($amount, $token){
        
        Pagarme::setApiKey("ak_test_JoTvtWMJKJWNroabQaQuE15xpiQevp");

        $transaction = PagarMe_Transaction::findById($token);

        $transaction->capture($amount); 
    }

}
