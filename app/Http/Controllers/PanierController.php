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
}
