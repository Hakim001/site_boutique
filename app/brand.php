<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $table="categories";
	
	protected $fillable = [
		'name', 'slug', 'logo'
	];
	
	function setNameAttribute($value)
	{
		$this->attribute['name'] = $value;
		$this->attribute['slug'] = str_slug($value);
	}
	
	function products()
	{
		return $this->hasMany('App\Product');
	}
}
