<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIPNURSINGUNITTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('IP_NURSING_UNIT', function(Blueprint $table)
		{
			$table->foreign('NURSING_UNIT_TYPE_CODE', 'IP_NURSING_UNIT_F1')->references('NURSING_UNIT_TYPE_CODE')->on('IP_NURSING_UNIT_TYPE')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('FACILITY_ID', 'IP_NURSING_UNIT_F10')->references('FACILITY_ID')->on('FM_STORAGE_LOCN')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('FACILITY_ID', 'IP_NURSING_UNIT_F11')->references('FACILITY_ID')->on('MR_SECTION')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('DEPT_CODE', 'IP_NURSING_UNIT_F12')->references('DEPT_CODE')->on('AM_DEPT_SECTION')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('AGE_GROUP_CODE', 'IP_NURSING_UNIT_F2')->references('AGE_GROUP_CODE')->on('AM_AGE_GROUP')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('FACILITY_ID', 'IP_NURSING_UNIT_F3')->references('OPERATING_FACILITY_ID')->on('AM_FACILITY_DEPT')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('SERVICE_CODE', 'IP_NURSING_UNIT_F4')->references('SERVICE_CODE')->on('AM_SERVICE')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('FACILITY_ID', 'IP_NURSING_UNIT_F5')->references('FACILITY_ID')->on('SM_FACILITY_PARAM')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('LOCN_TYPE', 'IP_NURSING_UNIT_F6')->references('LOCN_TYPE')->on('AM_CARE_LOCN_TYPE')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('LEVEL_OF_CARE_CODE', 'IP_NURSING_UNIT_F7')->references('LEVEL_OF_CARE_CODE')->on('AM_LEVEL_OF_CARE')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('APPL_PATIENT_CLASS', 'IP_NURSING_UNIT_F8')->references('PATIENT_CLASS')->on('AM_PATIENT_CLASS')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('FACILITY_ID', 'IP_NURSING_UNIT_F9')->references('FACILITY_ID')->on('MR_FILE_TYPE')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('IP_NURSING_UNIT', function(Blueprint $table)
		{
			$table->dropForeign('IP_NURSING_UNIT_F1');
			$table->dropForeign('IP_NURSING_UNIT_F10');
			$table->dropForeign('IP_NURSING_UNIT_F11');
			$table->dropForeign('IP_NURSING_UNIT_F12');
			$table->dropForeign('IP_NURSING_UNIT_F2');
			$table->dropForeign('IP_NURSING_UNIT_F3');
			$table->dropForeign('IP_NURSING_UNIT_F4');
			$table->dropForeign('IP_NURSING_UNIT_F5');
			$table->dropForeign('IP_NURSING_UNIT_F6');
			$table->dropForeign('IP_NURSING_UNIT_F7');
			$table->dropForeign('IP_NURSING_UNIT_F8');
			$table->dropForeign('IP_NURSING_UNIT_F9');
		});
	}

}
