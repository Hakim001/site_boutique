<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;

class PaiementController extends Controller
{
    public function checkoutStripe(Request $request)
	{
		//dd($request->all());
		
		$total = \Cart::total();
		try
		{
		Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
		
		$customer = Customer::create([
			'email' => $request->stripeEmail,
			'source' => $request->stripeToken,
		]);
		
		//dd($customer);
		
		$charge = Charge::create([
			'customer' => $customer->id,
			'amount' => $total * 100,
			'currency' => 'eur',
		]);
		
		// sauvegarde ... BDD
		
			$panier = $this->saveTransaction($charge, 'Stripe');
		
		
		}
		catch (Exception $e){
			
			return $e->getMessage();
			
		}
		
		//dd($charge);
		
		return view('panier.paiement', compact('charge', 'panier'));
	}
	
	function saveTransaction($charge, $type)
	{
		$total = \Cart::total();
		$cart = \Cart::content();
		
		$panier = \App\Panier::create([
			'user_id' => \Auth::user()->id,
			'total' => $total,
		]);
		
		foreach ($cart as $line) {
			\App\Line::create([
				'product_id' => $line->id,
				'panier_id' => $panier->id,
				'prix' => $line->price,
				'qte' => $line->qty,
			]);
		
		//mise à jour du stock
		
		$product = \App\product::find($line->id);
		$product->qte = $product->qte - $line->qty;
		$product->save();	
			
		}
   \App\Paiement::create([
				'panier_id' => $panier->id,
				'data' => json_encode($charge),
				'type' => $type,
			]);
		\Cart::destroy();
		
		return $panier;
		
	}
}
