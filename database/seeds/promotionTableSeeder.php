<?php

use Illuminate\Database\Seeder;

class promotionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\promotion::class, 10)->create();
    }
}
 