<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class UserTest extends TestCase
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

    //teste verificando se há usuários cadastrados (deve dar verdadeiro)
    public function testUsersNotEmpty(){
    	$user = User::find(1);
    	$this->assertNotEmpty($user->getUsers());
    }

    public function testUserHasProduct(){
    	$user = User::find(1);
    	$this->assertNotEmpty($user->getProducts());

    }


}
