<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//rota da página inicial
Route::get('/', function () {
    return view('welcome');
});

//rota da página de compra/checkout
Route::get('/purchase', 'ProductsController@index');
Route::post('/purchase','PurchaseController@checkout');
Route::get('/success','PurchaseController@success');

	