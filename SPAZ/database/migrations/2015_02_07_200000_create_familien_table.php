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
			$table->decimal('bewilligte_fahrzeit', 6, 2)->nullable();
			$table->integer('ref_jugendamt')->nullable()->unsigned();
			$table->integer('ref_mitarbeiter')->nullable()->unsigned();
			$table->timestamp('start_betreuung')->nullable();
			$table->timestamp('end_betreuung')->nullable();
			$table->string('status')->nullable();
			$table->integer('ref_ansprechpartner')->nullable()->unsigned();
			$table->integer('ref_weitere_adressen')->nullable()->unsigned();
			$table->timestamps();


			$table->foreign('ref_mitarbeiter')
				->references('id')->on('users')
				->onUpdate('cascade')
				->onDelete('cascade');
			$table->foreign('ref_ansprechpartner')
				->references('id')->on('familien_ansprechpartner')
				->onUpdate('cascade')
				->onDelete('cascade');
			$table->foreign('ref_weitere_adressen')
				->references('id')->on('familien_weitere_adressen')
				->onUpdate('cascade')
				->onDelete('cascade');

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
