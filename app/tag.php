<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    //protected $table="categories";
	
	protected $fillable = [
		'name', 'slug'
	];
	
	public function setNameAttribute($value)
	{
		$this->attributes['name'] = $value;
		$this->attributes['slug'] = str_slug($value);
	}
	
	public function products()
	{
		return $this->belongsToMany('App\product');
	}
}

