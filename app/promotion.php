<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class promotion extends Model
{
    protected $dates = [
		'started_at',
		'finished_at',
	];
	
	protected $fillable = [
		'product_at', 'prix'
	];
	
	public function product()
	{
		return $this->belongsto('App\product');
	}
		
}
