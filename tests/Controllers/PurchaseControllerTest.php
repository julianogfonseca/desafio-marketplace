<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PurchaseControllerTest extends TestCase
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

    public function testExistingSuccessPage(){
        $response = $this->call('GET', '/success');
        $this->assertResponseOk();
    }    

    public function testVisitPurchase()
    {
        $this->visit('/purchase')
             ->see('Checkout de Compras');
    }    

    public function testVisitSuccess()
    {
        $this->visit('/success')
             ->see('Checkout de Compras');
    }      
}
