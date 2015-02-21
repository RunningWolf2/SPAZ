<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use SPAZ\Permission;
use SPAZ\Role;
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
		$this->call('RoleTableSeeder');
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

class RoleTableSeeder extends Seeder {

	/*
	 * Wir nutzen Entrust (https://github.com/Zizaco/entrust/tree/laravel-5)
	 * zur Rollen und Berechtigungsverwaltung.
	 */

	public function run()
	{

		/*
		 * Nutzerrollen
		 */
		$admin = new Role();
		$admin->name         = 'admin';
		$admin->display_name = 'Administrator';
		$admin->description  = 'Admin der Anwendung';
		$admin->save();

		/*
		 * Nutzerrollen
		 */
		$mitarbeiter = new Role();
		$mitarbeiter->name         = 'mitarbeiter';
		$mitarbeiter->display_name = 'Mitarbeiter';
		$mitarbeiter->description  = 'Mitarbeiter des SPAZ Teams';
		$mitarbeiter->save();

		/*
		 * Berechtigungen
		 */

		// Familie
		$createFamilie = new Permission();
		$createFamilie->name         = 'create-familie';
		$createFamilie->display_name = 'Familie erstellen';
		// Erlaube dem Nutzer das...
		$createFamilie->description  = 'Erstellen einer neue Familie';
		$createFamilie->save();

		$editFamilie = new Permission();
		$editFamilie->name         = 'edit-familie';
		$editFamilie->display_name = 'Familie bearbeiten';
		$editFamilie->description  = 'Bearbeiten einer Familie';
		$editFamilie->save();

		$deleteFamilie = new Permission();
		$deleteFamilie->name         = 'delete-familie';
		$deleteFamilie->display_name = 'Familie löschen';
		$deleteFamilie->description  = 'Löschen einer Familie';
		$deleteFamilie->save();

		//Jugendamt
		$createJugendamt = new Permission();
		$createJugendamt->name         = 'create-jugendamt';
		$createJugendamt->display_name = 'Jugendamt erstellen';
		$createJugendamt->description  = 'Erstellen eines neuen Jugendamts';
		$createJugendamt->save();

		$editJugendamt = new Permission();
		$editJugendamt->name         = 'edit-jugendamt';
		$editJugendamt->display_name = 'Jugendamt bearbeiten';
		$editJugendamt->description  = 'Bearbeiten eines Jugendamts';
		$editJugendamt->save();

		$deleteJugendamt = new Permission();
		$deleteJugendamt->name         = 'delete-jugendamt';
		$deleteJugendamt->display_name = 'Jugendamt löschen';
		$deleteJugendamt->description  = 'Löschen eines Jugendamts';
		$deleteJugendamt->save();

		//Nachweise
		$createNachweis = new Permission();
		$createNachweis->name         = 'create-nachweis';
		$createNachweis->display_name = 'Nachweis erstellen';
		$createNachweis->description  = 'Erstellen eines neuen Nachweises';
		$createNachweis->save();

		$editNachweis = new Permission();
		$editNachweis->name         = 'edit-nachweis';
		$editNachweis->display_name = 'Nachweis bearbeiten';
		$editNachweis->description  = 'Bearbeiten eines Nachweises';
		$editNachweis->save();

		$deleteNachweis = new Permission();
		$deleteNachweis->name         = 'delete-nachweis';
		$deleteNachweis->display_name = 'Nachweis löschen';
		$deleteNachweis->description  = 'Löschen eines Nachweises';
		$deleteNachweis->save();

		/*
		 * Berechtigungen den Rollen zuordnen
		 */
		$admin->attachPermissions([
			$createFamilie,
			$editFamilie,
			$deleteFamilie,
			$createJugendamt,
			$editJugendamt,
			$deleteJugendamt,
			$createNachweis,
			$editNachweis,
			$deleteNachweis
		]);
		$mitarbeiter->attachPermissions([
			$createFamilie,
			$editFamilie,
			$deleteFamilie,
			$createJugendamt,
			$editJugendamt,
			$deleteJugendamt,
			$createNachweis,
			$editNachweis,
			$deleteNachweis
		]);

		/*
		 * Adminrechte dem ersten User zuteilen
		 */
		$user_admin = User::findOrFail(1)->first();

		$user_admin->attachRole($admin);

	}

}
