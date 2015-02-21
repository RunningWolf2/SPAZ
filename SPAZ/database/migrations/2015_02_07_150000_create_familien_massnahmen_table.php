<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilienMassnahmenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('familien_massnahmen', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ref_familie')->unsigned();
			$table->decimal('bewilligte_fachleistungsstunden', 6, 2);
			$table->decimal('woechentliche_fachleistungsstunden', 6, 2);
			$table->longText('beschreibung');
			$table->timestamp('date_start');
			$table->timestamp('date_end');
			$table->decimal('brutto_fachleistungsstunden', 6, 2);
			$table->timestamps();

			$table->foreign('ref_familie')->references('id')->on('familien')
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
		Schema::dropIfExists('familien_massnahmen');
	}

}
