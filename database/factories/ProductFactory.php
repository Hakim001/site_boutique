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

$factory->define(App\product::class, function (Faker $faker) {
	
	$name = $faker->sentence();
	$categories = null;
	$categories = App\category::pluck('id')->toArray();
	
	$brands = App\brand::pluck('id')->toArray();
	
	$types = ['people', 'nature', 'transport', 'sports', 'technics', 'fashion', 'business', 'food'];
	
	$image = $faker->randomElement($types);
	
    return [
        'name' => $name,
		'slug' => str_slug($name),
		'description' => $faker->paragraph,
		'prix' => $faker->randomFloat(2, $min=0, $max=300),
		'image' => $faker->imageUrl($width=400, $height=400, $image, true, 'Faker'),
		'qte' => 100,
		'category_id' => $faker->randomElement($categories),
		'brand_id' => $faker->randomElement($brands),
		
    ];
});
