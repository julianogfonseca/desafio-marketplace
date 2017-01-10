<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PagarMe;
use PagarMe_Transaction;

class PurchaseController extends Controller
{
    public function checkout(Request $request){
		
		//var_dump($request->token);

    	$amount = floatval($request->amount_total);

	    Pagarme::setApiKey("ak_test_JoTvtWMJKJWNroabQaQuE15xpiQevp");

	    $transaction = PagarMe_Transaction::findById($request->token);

	    $transaction->capture($amount);  


	    //print_r($transaction->status);
	    return redirect()->to('/success');
    }

    public function success(){
    	$user = new User();
    	$user->storeProfit();
    	$users = $user->getUsers();

    	return view('pages.success', compact('users'));
    }
}
