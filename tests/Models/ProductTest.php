<?php

use App\Product;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testProductsNotEmpty(){
    	$product = Product::find(1);
    	$this->assertNotEmpty($product->getProducts());
    }

    public function testProductHasUser(){
    	$product = Product::find(1);
    	$this->assertNotEmpty($product->getUser());
    }    
}
