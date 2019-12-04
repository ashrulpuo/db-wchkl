<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIPADTTRNTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('IP_ADT_TRN', function(Blueprint $table)
		{
			$table->string('FACILITY_ID', 2);
			$table->integer('ENCOUNTER_ID');
			$table->integer('SRL_NO');
			$table->string('PATIENT_ID', 20)->index();
			$table->string('TRN_TYPE', 1);
			$table->string('TRN_CODE', 2)->nullable();
			$table->date('TRN_DATE_TIME')->index();
			$table->string('FR_NURSING_UNIT_CODE', 4)->nullable();
			$table->string('FR_SERVICE_CODE', 4)->nullable();
			$table->string('FR_ROOM_NO', 10)->nullable();
			$table->string('FR_BED_NO', 8)->nullable();
			$table->string('FR_BED_CLASS_CODE', 2)->nullable();
			$table->string('FR_BED_TYPE_CODE', 2)->nullable();
			$table->string('FR_PRACTITIONER_ID', 15)->nullable();
			$table->string('FR_SPECIALTY_CODE', 4)->nullable();
			$table->string('FR_BED_TYPE_CODE_BY_DEFN', 2)->nullable();
			$table->string('FR_SUBSERVICE_CODE', 4)->nullable();
			$table->string('ORIG_DEPT_CODE', 10)->nullable();
			$table->string('EMERGENCY_TRN_YN', 1)->default('N');
			$table->string('PRACTITIONER_TFR_YN', 1)->default('N');
			$table->string('TO_NURSING_UNIT', 4)->nullable();
			$table->string('TO_SERVICE_CODE', 4)->nullable();
			$table->string('TO_ROOM_NO', 10)->nullable();
			$table->string('TO_BED_NO', 8)->nullable();
			$table->string('TO_BED_CLASS_CODE', 2)->nullable();
			$table->string('TO_BED_TYPE_CODE', 2)->nullable();
			$table->string('TO_PRACTITIONER_ID', 15)->nullable();
			$table->string('TO_SPECIALTY_CODE', 4)->nullable();
			$table->string('TO_BED_TYPE_CODE_BY_DEFN', 2)->nullable();
			$table->string('TO_SUBSERVICE_CODE', 4)->nullable();
			$table->date('EXPECTED_DISCHARGE_DATE')->nullable();
			$table->date('OT_DATE_TIME')->nullable();
			$table->date('BED_ALLOCATION_DATE_TIME')->nullable();
			$table->string('FROM_PRACT_TEAM_ID', 6)->nullable();
			$table->string('TO_PRACT_TEAM_ID', 6)->nullable();
			$table->date('DECEASED_DATE_TIME')->nullable();
			$table->string('AUTH_PRACTITIONER_ID', 15)->nullable();
			$table->string('BILL_TYPE_CODE', 2)->nullable();
			$table->string('BLNG_CLASS_CODE', 2)->nullable();
			$table->string('BLNG_SERV_CODE', 10)->nullable();
			$table->string('SURGERY_REQD_YN', 1)->default('N');
			$table->string('TRANSFER_CHARGEABLE_YN', 1)->default('N');
			$table->integer('TRN_CHARGE')->nullable();
			$table->string('TRN_CHARGE_DOC_NUM', 8)->nullable();
			$table->integer('TRN_CHARGE_ADJ_AMT')->nullable();
			$table->integer('TRN_DEP')->nullable();
			$table->string('TRN_DEP_DOC_NUM', 8)->nullable();
			$table->integer('TRN_DEP_ADJ_AMT')->nullable();
			$table->integer('REV_CHARGE')->nullable();
			$table->string('REV_CHARGE_YN', 1)->default('N');
			$table->string('PHYS_FEES_YN', 1)->default('N');
			$table->integer('FR_DAILY_RATE')->nullable();
			$table->integer('TO_DAILY_RATE')->nullable();
			$table->string('CANCEL_REASON_CODE', 8)->nullable();
			$table->string('ADT_TRN_STATUS', 1)->default('0');
			$table->string('INFORMED_YN', 1)->nullable();
			$table->string('INFORMED_TO', 2)->nullable();
			$table->string('INFORMED_NAME', 200)->nullable();
			$table->date('INFORMED_DATE_TIME')->nullable();
			$table->date('AUTH_TRF_DATE_TIME')->nullable();
			$table->string('DISCH_PRACTITIONER_ID', 15)->nullable();
			$table->string('TFR_TYPE', 1)->default('A');
			$table->integer('TFR_REQ_REF_NO')->nullable();
			$table->date('TRN_TO_DATE_TIME')->nullable();
			$table->string('PATIENT_CLASS', 2);
			$table->date('ADMISSION_DATE_TIME');
			$table->date('DISCHARGE_DATE_TIME')->nullable();
			$table->string('RESERVED_YN', 1)->default('N');
			$table->string('CANCEL_DISCH_PRACTITIONER_ID', 15)->nullable();
			$table->date('CANCEL_DISCH_DATE')->nullable();
			$table->string('ADDED_BY_ID', 30);
			$table->date('ADDED_DATE');
			$table->string('ADDED_AT_WS_NO', 30);
			$table->string('ADDED_FACILITY_ID', 2);
			$table->string('MODIFIED_BY_ID', 30);
			$table->date('MODIFIED_DATE');
			$table->string('MODIFIED_AT_WS_NO', 30);
			$table->string('MODIFIED_FACILITY_ID', 2);
			$table->index(['FACILITY_ID','TRN_TYPE','ADT_TRN_STATUS','TRN_DATE_TIME','ENCOUNTER_ID','PATIENT_ID']);
			$table->index(['FACILITY_ID','TRN_DATE_TIME','ENCOUNTER_ID','FR_NURSING_UNIT_CODE','TO_NURSING_UNIT','TRN_TYPE','TO_BED_NO']);
			$table->index(['FACILITY_ID','ADT_TRN_STATUS','TO_NURSING_UNIT','TRN_CODE','TRN_DATE_TIME','TRN_TYPE']);
			$table->index(['FACILITY_ID','SYS_NC00079$','TRN_TYPE']);
			$table->primary(['FACILITY_ID','ENCOUNTER_ID','SRL_NO']);
			$table->index(['FACILITY_ID','ADT_TRN_STATUS','TO_NURSING_UNIT','TRN_CODE','TO_SPECIALTY_CODE','TO_PRACTITIONER_ID','SYS_NC00079$','TRN_TYPE']);
			$table->index(['FACILITY_ID','ENCOUNTER_ID','TRN_DATE_TIME']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('IP_ADT_TRN');
	}

}
