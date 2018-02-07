<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
		'name', 'slug', 'description', 'prix', 'qte', 'image', 'category_id', 'brand_id'
	];
	
	public function setNameAttribute($value)
	{
		$this->attributes['name'] = $value;
		$this->attributes['slug'] = str_slug($value);
	}
	
	public function category()  
	{
		return $this->belongsTo('App\category');
	} 
	
	public function brand()
	{ 
		return $this->belongsTo('App\brand');
	}
	
	public function visuels()
	{
		return $this->hasMany('App\visuel');
	}
	
	public function tags()
	{
		return $this->belongsToMany('App\tag');
	}
	public function promotions()
	{
		return $this->hasMany('App\promotion');
	}
	
	public function onDiscount()
	{
		return $this->promotions()
		->where('started_at', '<=', \Carbon\Carbon::now())
		->where('finished_at', '>=', \Carbon\Carbon::now())
	    ->first();	
	}
	
	public function liked()
	{
		return $this->belongsToMany('App\User');
	}
	
	public function prixVente()
	{
		return $this->onDiscount()?$this->onDiscount()->prix:$this->prix;
	}
}
 