<?php


namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Category;

class MenuComposer
{
	public function compose(View $view)
	{
		$view->with('cats', Category::all());
	}
	
}