<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRLREQUESTDETAILTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('RL_REQUEST_DETAIL', function(Blueprint $table)
		{
			$table->string('OPERATING_FACILITY_ID', 2);
			$table->bigInteger('SPECIMEN_NO');
			$table->string('PATIENT_ID', 20);
			$table->string('TEST_CODE', 10);
			$table->string('GROUP_TEST_YN', 1)->nullable();
			$table->integer('NUM_TESTS')->nullable();
			$table->integer('NUM_ESSENTIAL')->nullable();
			$table->string('RESULT_STATUS', 1)->nullable();
			$table->string('PRINT_YN', 1)->nullable();
			$table->string('NUMERIC_RESULT', 15)->nullable();
			$table->string('NUMERIC_PREFIX', 1)->nullable();
			$table->integer('LINE_NO')->nullable();
			$table->integer('ORDER_LINE_NO')->nullable();
			$table->string('BILLED_YN', 1)->nullable();
			$table->string('TO_BE_BILLED_YN', 1)->nullable();
			$table->integer('BASE_RATE')->nullable();
			$table->integer('ADDL_BLNG_FACTOR')->nullable();
			$table->integer('DISCOUNT_PERCENT')->nullable();
			$table->integer('EFFECTIVE_CHARGE')->nullable();
			$table->integer('GROSS_CHARGE')->nullable();
			$table->integer('DISCOUNT_VALUE')->nullable();
			$table->integer('NET_CHARGE')->nullable();
			$table->string('BLNG_SERV_CODE', 10)->nullable();
			$table->string('PERF_PHYSICIAN_ID', 15)->nullable();
			$table->string('SECTION_CODE', 2)->nullable();
			$table->string('CANCELLED_YN', 1)->nullable();
			$table->string('CANCELLED_REASON', 60)->nullable();
			$table->string('CANCEL_CODE', 4)->nullable();
			$table->string('CANCEL_REMARKS', 200)->nullable();
			$table->string('REFLEX_TYPE', 2)->nullable();
			$table->string('REFERRED_TEST_YN', 1)->nullable();
			$table->string('REFERRED_LAB_CODE', 4)->nullable();
			$table->date('DATE_SENT')->nullable();
			$table->date('DATE_RECD')->nullable();
			$table->string('RELEASED_BY_ID', 30)->nullable();
			$table->date('RELEASED_DATE')->nullable();
			$table->date('RESULT_PRINTED_DATE')->nullable();
			$table->date('PROCESS_DATE')->nullable();
			$table->string('PROCESSED_YN', 1)->nullable();
			$table->string('ORDER_TEST_YN', 1)->nullable();
			$table->string('INCLUDE_SUSPEND_TEST_YN', 1)->nullable();
			$table->string('PARENT_REFLEX_TEST', 10)->nullable();
			$table->string('BILL_TEST_YN', 1)->nullable();
			$table->string('REFLEX_NON_PERFM_TEST_YN', 1)->nullable();
			$table->string('REFLEX_SUSP_TEST_YN', 1)->nullable();
			$table->string('SERV_PANEL_IND', 1)->nullable();
			$table->string('BILL_REVERSED_FOR_CAN_TEST_YN', 1)->nullable();
			$table->string('REASON_CODE', 4)->nullable();
			$table->string('HIDE_TEST_YN', 1)->nullable();
			$table->smallInteger('AVERAGE_TAT')->nullable();
			$table->string('REASON_DESC', 40)->nullable();
			$table->date('REASON_DATE')->nullable();
			$table->string('AVERAGE_TAT_UNIT', 4)->nullable();
			$table->date('CAN_DATE_TIME')->nullable();
			$table->string('CANCELLED_BY_ID', 30)->nullable();
			$table->string('TEST_ATTRIBUTE_FOR_ORDER', 10)->nullable();
			$table->string('PROC_CODE_SCHEME', 20)->nullable();
			$table->string('PROC_CODE_RESULTED', 30)->nullable();
			$table->string('ALTERED_GROUP_YN', 1)->nullable();
			$table->string('PRELIMINARY_RELEASE_YN', 1)->nullable();
			$table->string('PRELIMINARY_RELEASE_IND', 2)->nullable();
			$table->string('DONOR_SPECIMEN_YN', 1)->nullable();
			$table->string('ADDED_BY_ID', 30)->nullable();
			$table->string('MODIFIED_BY_ID', 30)->nullable();
			$table->date('ADDED_DATE')->nullable();
			$table->date('MODIFIED_DATE')->nullable();
			$table->string('ADDED_AT_WS_NO', 30);
			$table->string('ADDED_FACILITY_ID', 2);
			$table->string('MODIFIED_AT_WS_NO', 30);
			$table->string('MODIFIED_FACILITY_ID', 2);
			$table->index(['RELEASED_DATE','OPERATING_FACILITY_ID']);
			$table->index(['SPECIMEN_NO','OPERATING_FACILITY_ID']);
			$table->unique(['PATIENT_ID','SPECIMEN_NO','TEST_CODE','OPERATING_FACILITY_ID']);
			$table->index(['PROCESS_DATE','OPERATING_FACILITY_ID']);
			$table->index(['TEST_CODE','RESULT_STATUS']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('RL_REQUEST_DETAIL');
	}

}
