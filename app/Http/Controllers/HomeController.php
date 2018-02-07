<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	
    public function index()
	{
		$pubs = \App\product::orderByRaw('RAND()')->take(2)->get();
		
		$lasts = \App\product::orderBy('created_at', 'ASC')->take(4)->get();
		
		$promotions = \App\promotion::orderBy('created_at', 'ASC')
			->where('started_at', '<=', \Carbon\Carbon::now())
			->where('finished_at', '>=', \Carbon\Carbon::now())
			->take(4)->get();
		
		return view('home.main', compact('pubs', 'lasts', 'promotions'));
	}
	
	public function contact()
	{
		return view('home.contact');
	}
}
