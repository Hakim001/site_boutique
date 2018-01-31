<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function index($categorie = null)
	{
		
		if($categorie)
		{
			$products = \App\category::where('slug',$categorie)
				->first()
				->products()->paginate(12);
			
			
		}
		
		else
		{
			
		$products = \App\product::paginate(12);
		
			
		}
		
		
		
		$brands = \App\brand::all();
		
		$categories = \App\category::all();
		
		return view('catalogue.index', compact('products', 'categories', 'brands'));
	}
	
	public function marque($marque)
	{
		
		
	   $products = \App\brand::where('slug',$marque)
				->first()
				->products()->paginate(12);
			
			
		
		
		
		$categories = \App\category::all();
		
		$brands = \App\brand::all();
		
		
		return view('catalogue.index', compact('products', 'brands', 'categories'));
		
	}
}
