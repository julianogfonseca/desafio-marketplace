<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
	//retorna todos os produtos presentes na compra
    public function index(){
    	$products = Product::all();
    	$total = $this->totalCalc($products);
    	return view('pages.purchase', compact(['products', 'total']));
    }

    //cálculo do valor total de todos os produtos da compra + frete
    public function totalCalc($productsToCalc){
    	$total = 0;
    	foreach($productsToCalc as $product){
    		$total += $product->getValue();
    	}
    	return $total + 42;
    }
}
