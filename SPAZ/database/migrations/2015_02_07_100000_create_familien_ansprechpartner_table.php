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
			$table->string('strasse')->nullable();
			$table->string('plz')->nullable();
			$table->string('ort')->nullable();
			$table->string('telefon')->nullable();
			$table->string('mobil')->nullable();
			$table->string('fax')->nullable();
			$table->string('email')->nullable();
			$table->longText('sonstiges')->nullable();
			$table->integer('ref_familie')->unsigned();
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
		Schema::dropIfExists('familien_ansprechpartner');
	}

}
