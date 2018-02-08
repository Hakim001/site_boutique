<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactRequest;

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
	
	public function postcontact(ContactRequest $request)
	{
	  $message = \App\Message::create([
		  'nom' => $request->nom,
		  'email' => $request->email,
		  'objet' => $request->objet,
		  'content' => $request->content,
	  ]);
		
		flash('Merci ! Pour votre message, votre demande sera traiter dans les plus bref délais !')->success();
		
		return redirect()->back();
	}
}
