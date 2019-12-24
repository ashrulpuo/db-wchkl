<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMPRACETable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('MP_RACE', function(Blueprint $table)
		{
			$table->string('RACE_CODE', 10)->primary();
			$table->string('LONG_DESC', 30);
			$table->string('SHORT_DESC', 15);
			$table->date('EFF_DATE_FROM')->nullable();
			$table->date('EFF_DATE_TO')->nullable();
			$table->string('EFF_STATUS', 1);
			$table->string('ADDED_BY_ID', 30);
			$table->date('ADDED_DATE');
			$table->string('ADDED_AT_WS_NO', 30);
			$table->string('ADDED_FACILITY_ID', 2);
			$table->string('MODIFIED_BY_ID', 30);
			$table->date('MODIFIED_DATE');
			$table->string('MODIFIED_AT_WS_NO', 30);
			$table->string('MODIFIED_FACILITY_ID', 2);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('MP_RACE');
	}

}
