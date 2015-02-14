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
			$table->string('strasse')->nullable();
			$table->string('plz')->nullable();
			$table->string('ort')->nullable();
			$table->string('telefon')->nullable();
			$table->string('mobil')->nullable();
			$table->string('fax')->nullable();
			$table->string('email')->nullable();
			$table->text('notizen')->nullable();
			$table->decimal('bewilligteFahrzeit', 6, 2)->nullable();
			$table->integer('refJugendamt')->nullable();
			$table->integer('refMitarbeiter')->nullable();
			$table->timestamp('startBetreuung')->nullable();
			$table->timestamp('endeBetreuung')->nullable();
			$table->string('status')->nullable();
			$table->string('refAnsprechpartner')->nullable();
			$table->string('refWeitereAdressen')->nullable();
			$table->timestamps();
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
