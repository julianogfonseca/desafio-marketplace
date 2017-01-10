<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
	//retorna todos os produtos presentes na compra
    public function index(){

    	$product = new Product();
        $products = $product->getProducts();
        //cálculo do valor total de todos os produtos da compra + frete        
    	$amount = $product->amount($products);
    	return view('pages.purchase', compact(['products', 'amount']));
    }

}
