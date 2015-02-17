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
		$this->call('JugendamtTableSeeder');
		$this->call('FamilienTableSeeder');
		$this->call('FamilienAnsprechpartnerTableSeeder');
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

class JugendamtTableSeeder extends Seeder {

	public function run()
	{

		DB::table('jugendamt')->insert([
			'name'=>'JA 1',
			'website'=>'http://google.com',
			'created_at'=>new DateTime,
			'updated_at'=> new DateTime
		]);
		DB::table('jugendamt')->insert([
			'name'=>'JA 2',
			'website'=>'http://google.com',
			'created_at'=>new DateTime,
			'updated_at'=> new DateTime
		]);

	}

}

class FamilienTableSeeder extends Seeder {

	public function run()
	{

		DB::table('familien')->insert([
			'anrede'=>'Familie',
			'name'=>'Mustermann',
			'ort'=>'Papenburg',
			'ref_jugendamt'=> 1,
			'ref_mitarbeiter'=> 1,
			'created_at'=>new DateTime,
			'updated_at'=> new DateTime
		]);

		DB::table('familien')->insert([
			'anrede'=>'Familie',
			'name'=>'Quack',
			'ort'=>'Dörpen',
			'ref_jugendamt'=> 1,
			'ref_mitarbeiter'=> 1,
			'created_at'=>new DateTime,
			'updated_at'=> new DateTime
		]);

		DB::table('familien')->insert([
			'anrede'=>'Fall',
			'name'=>'Musterfrau',
			'ort'=>'Esterwegen',
			'ref_jugendamt'=> 2,
			'ref_mitarbeiter'=> 1,
			'created_at'=>new DateTime,
			'updated_at'=> new DateTime
		]);

	}

}
class FamilienAnsprechpartnerTableSeeder extends Seeder {

	public function run()
	{

		DB::table('familien_ansprechpartner')->insert([
			'anrede' => 'Herr',
			'vorname' => 'Max',
			'nachname' => 'Mustermann',
			'ort' => 'Papenburg',
			'ref_familie' =>  1,
			'created_at' => new DateTime,
			'updated_at' =>  new DateTime
		]);
		DB::table('familien_ansprechpartner')->insert([
			'anrede' => 'Herr',
			'vorname' => 'Test',
			'nachname' => 'Mustermann',
			'ort' => 'Papenburg',
			'ref_familie' =>  1,
			'created_at' => new DateTime,
			'updated_at' =>  new DateTime
		]);
		DB::table('familien_ansprechpartner')->insert([
			'anrede' => 'Herr',
			'vorname' => 'Max',
			'nachname' => 'Musterfrau',
			'ort' => 'Esterwegen',
			'ref_familie' =>  2,
			'created_at' => new DateTime,
			'updated_at' =>  new DateTime
		]);

	}

}
