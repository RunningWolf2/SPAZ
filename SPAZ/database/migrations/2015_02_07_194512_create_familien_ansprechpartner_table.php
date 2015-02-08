<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilienAnsprechpartnerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('familien_ansprechpartner', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('typ');
			$table->string('anrede');
			$table->string('vorname');
			$table->string('nachname');
			$table->string('strasse');
			$table->string('plz');
			$table->string('ort');
			$table->string('telefon');
			$table->string('mobil');
			$table->string('fax');
			$table->string('email');
			$table->longText('sonstiges');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('familien_ansprechpartner');
	}

}
