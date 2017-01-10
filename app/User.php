<?php

namespace App;

use App\Product;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	//classe User é equivalente ao fornecedor

    //relação 1 para n de produtos e fornecedores
    public function products(){
        return $this->hasMany('App\Product');
    }

    //relação n para n de vendas e fornecedores
    public function purchases(){
        return $this->belongsToMany('App\Purchase');        
    }

    //salva o lucro de cada usuário na compra
    public function storeProfit(){
        $product = new Product();
        $products = $product->getProducts();
        $amount = $product->amount($products)/100;

        foreach($products as $prod){
            $user = $prod->getUser();
            if($user->getName() != 'Maria Barros'){
                $profitUser = ($prod->getValue() * 0.75) + $prod->getFreight();
                //print_r($prod->getFreight());
                $user->setProfit($profitUser);
                $amount = $amount - $profitUser;
                $user->save();
            } 
        }
        $userMaria = User::where('name', 'Maria Barros')->first();
        $userMaria->setProfit($amount);
        $userMaria->save();
        
    }

    //getters e setters

    public function getUsers(){
        return User::all();
    }

    public function getName(){
    	return $this->name;
    }

    public function getProducts(){
    	return $this->products;
    }

    public function getProfit(){
        return $this->profit;
    }

    public function setProfit($profit){
        $this->profit = $profit;
    }

}
