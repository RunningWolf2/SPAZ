<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMitarbeiterFachleistungsstundenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mitarbeiter_fachleistungsstunden', function(Blueprint $table)
		{
			$table->string('ref_user');
			$table->string('kalenderwoche');
			$table->string('jahr');
			$table->string('fachleistungsstunden');
			$table->string('tage');
			$table->string('bemerkung');

			$table->foreign('ref_user')->references('id')->on('users')
				->onUpdate('cascade')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('mitarbeiter_fachleistungsstunden');
	}

}
