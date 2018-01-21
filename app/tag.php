<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $table="categories";
	
	protected $fillable = [
		'name', 'slug'
	];
	
	function setNameAttribute($value)
	{
		$this->attribute['name'] = $value;
		$this->attribute['slug'] = str_slug($value);
	}
	
	function products()
	{
		return $this->belongsToMany('App\Product');
	}
}
