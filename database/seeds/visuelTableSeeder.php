<?php

use Illuminate\Database\Seeder;

class visuelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\visuel::class, 150)->create();
    }
}   
