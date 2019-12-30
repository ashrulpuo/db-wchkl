<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAEPATEMERGENCYDETAILTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('AE_PAT_EMERGENCY_DETAIL', function(Blueprint $table)
		{
			$table->string('FACILITY_ID', 2);
			$table->integer('ENCOUNTER_ID');
			$table->date('RECORDED_DATE')->default('SYSDATE');
			$table->string('AE_ENCOUNTER_TYPE', 1);
			$table->string('ARRIVAL_MODE', 2)->nullable();
			$table->string('ACCIDENT_LOCATION', 30)->nullable();
			$table->string('PROTECTIVE_DEVICE_CODE', 4)->nullable();
			$table->string('BURN_YN', 1)->default('N');
			$table->string('DEGREE_OF_BURN', 20)->nullable();
			$table->string('PAT_POSITION_CODE', 4)->nullable();
			$table->string('TRAUMA_YN', 1)->default('N');
			$table->string('BLUNT_INJURY_YN', 1)->default('N');
			$table->string('PENETRATING_INJURY_YN', 1)->default('N');
			$table->string('TETANUS_ADMIN_YN', 1)->default('N');
			$table->string('TETANUS_ADMIN_WHEN', 15)->nullable();
			$table->string('MEDICO_LEGAL_DETAILS', 2000)->nullable();
			$table->string('INCIDENT_REMARKS', 2000)->nullable();
			$table->string('PREGNANT_YN', 1);
			$table->date('LMP_DATE')->nullable();
			$table->string('GD_FOR_AGE_YN', 1)->default('N');
			$table->string('IM_UPTO_DATE_YN', 1)->default('N');
			$table->decimal('HEIGHT', 5)->nullable();
			$table->string('HEIGHT_UNIT', 1)->nullable();
			$table->decimal('WEIGHT', 5)->nullable();
			$table->string('WEIGHT_UNIT', 1)->nullable();
			$table->decimal('CIRCUMFERENCE', 5)->nullable();
			$table->string('CIRCUMFERENCE_UNIT', 1)->nullable();
			$table->string('MECH_INJURY_CATG_CODE', 10)->nullable();
			$table->string('MECH_INJURY_SUBCATG_CODE', 10)->nullable();
			$table->string('VEHICLE_INVOLVED1_CODE', 4)->nullable();
			$table->string('VEHICLE_INVOLVED2_CODE', 4)->nullable();
			$table->string('COMPLAINT_CODE', 8)->nullable();
			$table->string('OSCC_YN', 1)->default('N');
			$table->integer('POA_WEEKS')->nullable();
			$table->integer('POA_DAYS')->nullable();
			$table->string('MENARCHE_YN', 1)->default('N');
			$table->string('DEVP_MILESTONE_AGE_YN', 1)->default('N');
			$table->string('IMMUNIZATION_STATUS', 1)->nullable();
			$table->string('ATT_GIVEN_YN', 1)->default('N');
			$table->string('CAP_BLOOD_SUGAR', 30)->nullable();
			$table->string('FBC_YN', 1)->default('N');
			$table->string('ECG_YN', 1)->default('N');
			$table->string('DRESSING_YN', 1)->default('N');
			$table->string('IMMOBILIZATION_CODE', 6)->nullable();
			$table->string('PAT_PRIORITY', 2)->nullable();
			$table->string('REMARKS', 250)->nullable();
			$table->string('MEDICAL_YN', 1)->default('N');
			$table->string('SURGICAL_YN', 1)->default('N');
			$table->string('PRIORITY_ZONE', 1)->nullable();
			$table->string('CLINIC_CODE', 4)->nullable();
			$table->string('TREATMENT_AREA_CODE', 2)->nullable();
			$table->string('BED_NO', 8)->nullable();
			$table->string('AMBULATORY_STATUS', 2)->nullable();
			$table->string('DISASTER_YN', 1)->default('N');
			$table->string('DISASTER_TOWN_CODE', 6)->nullable();
			$table->string('DISASTER_TYPE_CODE', 4)->nullable();
			$table->string('POL_REP_NO', 30)->nullable();
			$table->string('POL_STN_ID', 30)->nullable();
			$table->string('POL_ID', 30)->nullable();
			$table->date('DATE_TIME_OF_ACCIDENT')->nullable();
			$table->string('PLACE_OF_ACCIDENT', 100)->nullable();
			$table->string('ADDED_BY_ID', 30);
			$table->date('ADDED_DATE');
			$table->string('ADDED_AT_WS_NO', 30);
			$table->string('ADDED_FACILITY_ID', 2);
			$table->string('MODIFIED_BY_ID', 30);
			$table->date('MODIFIED_DATE');
			$table->string('MODIFIED_AT_WS_NO', 30);
			$table->string('MODIFIED_FACILITY_ID', 2);
			$table->string('VEHICLE_REG_NO1', 15)->nullable();
			$table->string('VEHICLE_REG_NO2', 15)->nullable();
			$table->string('PRIORITY_ZONE_RED', 1)->nullable();
			$table->string('TRANSPORT_MODE', 10)->nullable();
			$table->string('ARRIVAL_CODE', 2)->nullable();
			$table->string('ACCOMPANIED_BY_CODE', 10)->nullable();
			$table->string('O_AND_G_YN', 1)->default('N');
			$table->string('INITIAL_MGMT_MEDICATION', 30)->nullable();
			$table->string('INITIAL_MGMT_OTHERS', 30)->nullable();
			$table->primary(['FACILITY_ID','ENCOUNTER_ID','RECORDED_DATE']);
			$table->index(['FACILITY_ID','ENCOUNTER_ID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('AE_PAT_EMERGENCY_DETAIL');
	}

}
