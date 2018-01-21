<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Athakim',
            'email' => 'hakim'.'@gmail.com',
            'password' => bcrypt('secret'),
			'role' => 'admin',
			'bio' => 'bio'
        ]);
		factory(App\User::class, 50)->create();
    }
}
