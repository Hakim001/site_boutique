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
	
	public function tag($tag)
	{
		
		
	   $products = \App\tag::where('slug',$tag)
				->first()
				->products()->paginate(12);
			
			
		
		
		
		$categories = \App\category::all();
		
		$brands = \App\brand::all();
		
		
		return view('catalogue.index', compact('products', 'brands', 'categories'));
		
	}
	
	public function filter(Request $request, $categorie = null)
	{
		$categories = \App\category::all();
		
		$brands = \App\brand::all();
		$ordre = $request->ordre;
		$perpage = $request->perpage;
		
		if($categorie == null)
		{
			$requete = "App\product::";
		}
		
		else
		{
			$requete = "App\category::where('slug','".$categorie."')->first()
			->products()->";
		}
		
		switch($ordre)
		{
			case 'new':
    			$requete .= "orderBy('created_at','ASC')";
    			break;

    		case 'ASC':
                $requete .= "orderBy('name','ASC')";
                break;

            case 'DESC':
                $requete .= "orderBy('name','DESC')";
                break;

            case 'prix-desc':
                $query = "DB::raw('CAST(prix AS DECIMAL(10,2))')";
                $requete .= "orderBy($query, 'DESC')"; 

                break;

            case 'prix-asc':
                $requete .= "orderBy('prix', 'ASC')";
				
                break;
				
			case 'promotion':
				$collection = collect();
				$promotions = \App\promotion::where('started_at', '<=', \Carbon\Carbon::now())
					->where('finished_at', '>=', \Carbon\Carbon::now())->get();
				
				foreach($promotions as $promo) {
					$collection->push($promo->product);
					
				}
				
				
				$page = \Illuminate\Pagination\LengthAwarePaginator::resolveCurrentPage();
				
				$products = new \Illuminate\Pagination\LengthAwarePaginator($collection->forPage($page, $perpage), $collection->count(), $perpage, $page, [ 'path' => \Illuminate\Pagination\LengthAwarePaginator::resolveCurrentPage() ]);
				
			return view('catalogue.index', compact('products','categories','brands','categorie','ordre','perpage'));
				
				break;
				
				
		   default:
    			$requete .= "orderBy('created_at','ASC')";
    			break;
		}
		
		$requete .=  "->paginate($perpage)";
		
		eval("\$products=$requete;");
		
		
	return view('catalogue.index', compact('products','categories','brands','categorie','ordre','perpage'));
	}
	
	public function search(Request $request)
	{
		$brands = \App\brand::all();
		
		$categories = \App\category::all();
		
		$products = \App\product::where('name', 'like', '%'. $request . '%')->orwhere('description','like', '%' . $request->q . '%')->paginate(12);
		
		return view('catalogue.index', compact('products','categories','brands'));
	}
}
