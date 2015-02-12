<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use SPAZ\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

	public function run()
	{

		User::create([
			'name' => env('ADMIN_NAME'),
			'email' => env('ADMIN_EMAIL'),
			'password' => bcrypt('123456789'),
		]);

	}

}
