<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visuel extends Model
{
    protected $fillable = [
		'name', 'url', 'product_id',
	];
	
	public function products()
	{
		return $this->belongsTo('App\product');
	}
}
   