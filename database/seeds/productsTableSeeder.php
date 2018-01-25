<?php

use Illuminate\Database\Seeder;

class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$tags = App\tag::orderByRaw('RAND()')->take(4)->get();
		
       factory(App\product::class, 300)->create()->each(function($u) use($tags)
	   {
		   foreach ($tags as $tag)
		   {
			   $u->tags()->attach($tag->id);
		   }
	   });
													
    }
} 
