<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
   public function index()
   {
	   $panier = \Cart::content();
	   
	   //dd($panier);
	   
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
	
	public function findItem($id)
    {
    	$items = \Cart::search(function($cartitem, $rowId) use ($id) {

    		return $cartitem->id === intval($id);
    	}); 

    	return $items->first();
    }

	
	public function addOne($id)
    {
    	$product = \App\Product::findOrFail($id);

    	\Cart::add($product->id, $product->name, 1 , $product->prixVente(),['size' => 'large']);

    	$item = $this->findItem($id);

    	$prix = $item->price * $item->qty;

    	return \Response::json([
    		'totalht' => \Cart::subtotal(),
    		'total' => \Cart::total(),
    		'tax' => \Cart::tax(),
    		'prix' => $prix ,
    		'id' => $id
    	]);
    	
    }


    public function subOne($id)
    {
    	$item = $this->findItem($id);

	    $newItem = \Cart::update($item->rowId, intval($item->qty -1) );

	    $prix = $newItem->price * $newItem->qty;

	    return \Response::json(['totalht' => \Cart::subtotal(),'total'=>\Cart::total(),'prix'=> $prix ,'id'=>$id,'tax'=>\Cart::tax()]);
    }
	
	 function delete($id)
    {
    	$item =  $this->findItem($id);

    	\Cart::remove($item->rowId);

    	// flash ....
    	return redirect()->back();
    }
	
	 public function addProduct(Request $request)
    {
    	return $this->add($request->slug , $request->qte);
    }
	
	 public function valider()
    {
        $panier = \Cart::content();

        return view('panier.valider',compact('panier'));

    }
	
	public function payer()
	{
		$panier = \Cart::total();
		
		return view('panier.payer', compact('panier'));
	}


}