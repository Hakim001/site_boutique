<?php

use Faker\Generator as Faker;

use App\product;

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

$factory->define(App\visuel::class, function (Faker $faker) {
	
	$name = $faker->sentence($nbwords = 1, $variableNbWords = true);
	$products = product::pluck('id')->toArray();
	
	$types = ['people', 'nature', 'transport', 'sports', 'technics', 'fashion', 'business', 'food'];
	
	$image = $faker->randomElement($types);
    return [
        'name' => $name,
		'url' => $faker->imageUrl($width=400, $height=400, $image, true, 'Faker'),
		'product_id' => $faker->randomElement($products),
    ];
}); 
