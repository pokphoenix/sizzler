<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        
		\DB::table('users')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => "Pok",
				'lastname' => "Phoenix",
				'email' => "pokphoenix@gmail.com",
				'password' => '$2y$10$AuzyLYNtw4pRU3upDScxrOmfA7jRSBQQknipBw9oK9dAwegxWrmYi',
				'remember_token' => '',
				'created_at' => "2017-07-05 12:13:13",
				'updated_at' => "2017-07-05 12:13:13"
			),
			//
		));

		\DB::table('admins')->delete();
        
		\DB::table('admins')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => "Admin",
				'lastname' => "Sizzler",
				'email' => "admin@sizzler.com",
				'password' => '$2y$10$AuzyLYNtw4pRU3upDScxrOmfA7jRSBQQknipBw9oK9dAwegxWrmYi',
				'remember_token' => '',
				'created_at' => "2017-07-05 12:13:13",
				'updated_at' => "2017-07-05 12:13:13"
			),
			//
		));
    }
}
