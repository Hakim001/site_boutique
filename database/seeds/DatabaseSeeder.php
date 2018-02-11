<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Model::unguard();
        //$this->call(UsersTableSeeder::class);
		
		$this->call([
			UsersTableSeeder::class,
	       	categoriesTableSeeder::class,
	       	brandTableSeeder::class,
	       	tagTableSeeder::class,
	       	productsTableSeeder::class,
	       	promotionTableSeeder::class,
	       	visuelTableSeeder::class,
            PagesTableSeeder::class,
		]);
		
		Model::reguard();
    }
}
 