<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\promotion::class, function (Faker $faker) {
	
	$name = $faker->sentence();
	$products = null;
	$products = App\product::where('prix', '>', 30)->where('prix', '<', 40)->get();
	
	$ids = $products->pluck('id')->toArray();
	$id = $faker->randomElement($ids);

	
	$prix = $products->where('id', $id)->first()->prix;
	
    return [
        'started_at' => \Carbon\Carbon::now(),
		'finished_at' => \Carbon\Carbon::now()->addweeks(2),
		'prix' => $prix - ($prix * 20/100),
		'product_id' => $id,
    ];
});
 