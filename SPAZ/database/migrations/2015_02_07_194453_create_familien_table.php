<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilienTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('familien', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('anrede');
			$table->string('name');
			$table->string('strasse');
			$table->string('plz');
			$table->string('ort');
			$table->string('telefon');
			$table->string('mobil');
			$table->string('fax');
			$table->string('email');
			$table->decimal('bewilligteFahrzeit', 6, 2);
			$table->integer('refJugendamt');
			$table->integer('refMitarbeiter');
			$table->timestamp('startBetreuung');
			$table->timestamp('endBetreuung');
			$table->string('status');
			$table->string('refAnsprechpartner');
			$table->string('refWeitereAdressen');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('familien');
	}

}
