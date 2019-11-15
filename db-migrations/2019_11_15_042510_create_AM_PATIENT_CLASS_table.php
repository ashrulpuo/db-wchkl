<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAMPATIENTCLASSTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('AM_PATIENT_CLASS', function(Blueprint $table)
		{
			$table->string('PATIENT_CLASS', 2)->primary();
			$table->string('LONG_DESC', 30);
			$table->string('SHORT_DESC', 15);
			$table->integer('PREFIX_NO')->nullable();
			$table->string('ADDED_BY_ID', 30)->default('USER');
			$table->date('ADDED_DATE');
			$table->string('ADDED_AT_WS_NO', 30);
			$table->string('ADDED_FACILITY_ID', 2);
			$table->string('MODIFIED_BY_ID', 30)->default('USER');
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
		Schema::drop('AM_PATIENT_CLASS');
	}

}
