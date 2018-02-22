<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function like($id)
	{
		if(\Auth::guest())
			
			return response()->json(['error'=>true, 'message'=>'Vous n\'êtes pas authantifier !']);
		
		\App\product::findorfail($id)->liked()->toggle(\Auth::id());
		
		    return response()->json(['error'=>false, 'message'=>'Vos favoris ont été mis à jour !']);
	}
}
