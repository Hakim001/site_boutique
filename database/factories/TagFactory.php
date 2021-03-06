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

$factory->define(App\tag::class, function (Faker $faker) {
	
	$name = $faker->sentence($nbwords = 1, $variablewords = true);
    return [
        'name' => $name,
		'slug' => str_slug($name),
		
    ];
});
