<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
   public function index()
   {
	   $panier = \Cart::content();
	   
	   return view('panier.index', compact('panier'));
   }

 
public function add($slug, $qte=1)
    {
    	$product = \App\product::where('slug',$slug)->firstOrFail();

    	// calculer le prixht;
    	// prixht =  [prixVente] / (1 + ([Taux TVA] / 100))
    	$prixVente = $product->prixVente();

    	$prixht = round($prixVente/(1 + config('cart.tax')/100 ), 2 );

    	\Cart::add($product->id , $product->name , $qte , $prixht , ['size'=>'large']);

    	return redirect()->route('panier');
    }
}