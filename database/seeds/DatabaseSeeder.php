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
			brandTableSeeder::class,
			categoriesTableSeeder::class,
			productsTableSeeder::class,
			tagTableSeeder::class,
			visuelTableSeeder::class,
			UsersTableSeeder::class,
			promotionTableSeeder::class,
			//pageTableSeeder::class,
		]);
		
		Model::reguard();
    }
}
