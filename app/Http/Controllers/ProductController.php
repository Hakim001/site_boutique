<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
     function index($slug)
	{
		$product = \App\product::where('slug',$slug)->firstOrFail();
		$related = \App\category::findOrFail($product->category_id)->products()->orderByRaw('RAND()')->take(4)->get();
		
		return view('produits.index', compact('product', 'related'));
	}
}
