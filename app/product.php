<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
		'name', 'slug', 'description', 'prix', 'qte', 'image', 'category_id', 'brand_id',
	];
	
	function setNameAttribute($value)
	{
		$this->attribute['name'] = $value;
		$this->attribute['slug'] = str_slug($value);
	}
	
	function category()
	{
		$this->belongsTo('App\category');
	}
	
	function brand()
	{
		$this->belongsTo('App\brand');
	}
	
	function visuels()
	{
		$this->hasMany('App\visuel');
	}
	
	function tags()
	{
		$this->belongsToMany('App\tag');
	}
}
