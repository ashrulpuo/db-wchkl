<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIPNURSINGUNITTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('IP_NURSING_UNIT', function(Blueprint $table)
		{
			$table->string('FACILITY_ID', 2);
			$table->string('NURSING_UNIT_CODE', 4);
			$table->string('LONG_DESC', 60);
			$table->string('SHORT_DESC', 30);
			$table->string('NURSING_UNIT_TYPE_CODE', 4);
			$table->string('LOCN_TYPE', 1);
			$table->string('AGE_GROUP_CODE', 2)->nullable();
			$table->string('DEPT_CODE', 10);
			$table->string('SERVICE_CODE', 4);
			$table->string('FS_LOCN_CODE', 8)->nullable();
			$table->string('INCL_FOR_HOSP_OCCUP_CALC_YN', 1)->default('N');
			$table->string('ALLOW_EMERG_TRF_YN', 1)->default('N');
			$table->string('TEMPORARY_LOCATION_YN', 1)->default('N');
			$table->string('TEACHING_LOCATION_YN', 1)->default('N');
			$table->string('ALLOW_PSEUDO_BED_YN', 1)->default('N');
			$table->string('GENERATE_PSEUDO_BED_SRL_YN', 1)->default('N');
			$table->string('CHECK_SAME_SEX_IN_ROOM_YN', 1)->default('N');
			$table->string('PREFIX_FOR_PSEUDO_BED_SRL_NO', 2)->nullable();
			$table->integer('NEXT_PSEUDO_BED_SRL')->nullable();
			$table->integer('MAX_PSEUDO_BED_SRL')->nullable();
			$table->integer('NUM_OF_BEDS')->default(0);
			$table->string('NUM_OF_PSEUDO_BEDS', 6)->nullable()->default('0');
			$table->integer('NUM_OF_BEDS_OCCUPIED')->nullable()->default(0);
			$table->string('ONLINE_MR_NOTFN_YN', 1)->default('N');
			$table->string('AUTO_FILE_TRANSFER_YN', 1)->default('N');
			$table->string('RELEASE_BED_ON_LEAVE_YN', 1)->default('N');
			$table->string('SECTION_CODE', 6)->nullable();
			$table->string('MR_SECTION_TYPE', 1)->nullable();
			$table->string('MR_SECTION_CODE', 2)->nullable();
			$table->string('LEVEL_OF_CARE_CODE', 10)->nullable();
			$table->string('APPL_PATIENT_CLASS', 2)->nullable();
			$table->string('DFLT_FILE_TYPE_CODE', 2)->nullable();
			$table->string('ALLOW_NEW_BORN_REGN_YN', 1)->default('N');
			$table->string('PHYSICAL_LOCATION', 40)->nullable();
			$table->string('EFF_STATUS', 1)->default('E');
			$table->string('ADDED_BY_ID', 30)->default('USER');
			$table->date('ADDED_DATE')->default('SYSDATE');
			$table->string('ADDED_AT_WS_NO', 30);
			$table->string('ADDED_FACILITY_ID', 2);
			$table->string('MODIFIED_BY_ID', 30)->default('USER');
			$table->date('MODIFIED_DATE')->default('SYSDATE');
			$table->string('MODIFIED_AT_WS_NO', 30);
			$table->string('MODIFIED_FACILITY_ID', 2);
			$table->integer('FLOOR_WIDTH')->nullable();
			$table->integer('FLOOR_HEIGHT')->nullable();
			$table->primary(['FACILITY_ID','NURSING_UNIT_CODE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('IP_NURSING_UNIT');
	}

}
