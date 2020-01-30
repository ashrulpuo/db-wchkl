<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRLREQUESTHEADERTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('RL_REQUEST_HEADER', function(Blueprint $table)
		{
			$table->string('OPERATING_FACILITY_ID', 2);
			$table->bigInteger('SPECIMEN_NO');
			$table->string('PATIENT_ID', 20);
			$table->string('SECTION_CODE', 1)->nullable();
			$table->integer('ENCOUNTER_ID')->nullable();
			$table->string('PATIENT_CLASS', 2)->nullable();
			$table->string('EPISODE_TYPE', 1)->nullable();
			$table->integer('EPISODE_NO')->nullable();
			$table->integer('TFR_VISIT_NO')->nullable();
			$table->string('SOURCE_TYPE', 1)->nullable();
			$table->string('SOURCE_CODE', 6)->nullable();
			$table->string('CONSULTANT_CODE', 15)->nullable();
			$table->string('WARD_CODE', 4)->nullable();
			$table->string('ROOM_NUM', 50)->nullable();
			$table->string('BED_NUM', 8)->nullable();
			$table->date('SPEC_COLLTD_DATE_TIME')->nullable();
			$table->date('SPEC_RECD_DATE_TIME')->nullable();
			$table->date('SPEC_REGD_DATE_TIME')->nullable();
			$table->string('SPECIMEN_TYPE_CODE', 4)->nullable();
			$table->string('ENTIRE_SPEC_CANCEL_YN', 1)->nullable();
			$table->string('URGENT_INDICATOR', 1)->nullable();
			$table->string('REQUEST_COMMENT_CODE1', 4)->nullable();
			$table->string('REQUEST_COMMENT_DESC1', 40)->nullable();
			$table->string('REQUEST_COMMENT_CODE2', 4)->nullable();
			$table->string('REQUEST_COMMENT_DESC2', 40)->nullable();
			$table->string('REQUEST_COMMENT_CODE3', 4)->nullable();
			$table->string('REQUEST_COMMENT_DESC3', 40)->nullable();
			$table->string('TEL_NUM', 15)->nullable();
			$table->string('EXTRA_COPIES_TO', 15)->nullable();
			$table->integer('NO_OF_SLIDES')->nullable();
			$table->string('REQUEST_CHECK', 1)->nullable();
			$table->bigInteger('REF_SPECIMEN_NO')->nullable();
			$table->string('ORDER_TYPE_CODE', 4)->nullable();
			$table->string('ORDER_ID', 15)->nullable();
			$table->string('ORDERED_FACILITY_ID', 2)->nullable();
			$table->integer('MAX_DTL_LINE_NO')->nullable();
			$table->string('BED_CLASS_CODE', 2)->nullable();
			$table->string('BILL_YN', 1)->nullable();
			$table->string('BILL_SAMPLE_TASK_YN', 1)->nullable();
			$table->string('CHRG_PAT_OR_EXTL', 1)->nullable();
			$table->string('CANCELLED_YN', 1)->nullable();
			$table->string('CANCELLED_REASON', 60)->nullable();
			$table->string('CANCEL_CODE', 4)->nullable();
			$table->string('INVOICED_YN', 1)->nullable();
			$table->string('DOC_TYPE_CODE', 6)->nullable();
			$table->integer('DOC_NUM')->nullable();
			$table->integer('AMOUNT_PAID')->nullable();
			$table->string('VERIFIED_BY_ID', 30)->nullable();
			$table->date('VERIFIED_DATE')->nullable();
			$table->string('RESULTS_SENT_YN', 1)->nullable();
			$table->string('RELEASED_BY_ID', 30)->nullable();
			$table->date('RELEASED_DATE')->nullable();
			$table->date('RESULT_PRINTED_DATE')->nullable();
			$table->string('ASSIGN_TO', 30)->nullable();
			$table->date('ASSIGN_DATE_TIME')->nullable();
			$table->string('CATEGORY_CODE', 4)->nullable();
			$table->string('CATEGORY_YEAR', 4)->nullable();
			$table->string('CATEGORY_NUMBER', 15)->nullable();
			$table->string('PERFORM_SITE_CODE', 4)->nullable();
			$table->string('ORDERING_DOCTOR_NAME', 40)->nullable();
			$table->string('DONOR_SPECIMEN_YN', 1)->nullable();
			$table->date('CAN_DATE_TIME')->nullable();
			$table->string('CANCELLED_BY_ID', 30)->nullable();
			$table->integer('NEXT_TRANS_SEQ_NO')->nullable();
			$table->string('CUSTOMER_TYPE_IND', 2)->nullable();
			$table->string('CUSTOMER_CODE', 20)->nullable();
			$table->string('DISPOSED_YN', 1)->nullable();
			$table->string('DISPOSED_BY', 30)->nullable();
			$table->date('DISPOSED_DATE')->nullable();
			$table->string('EXT_ORDER_YN', 1)->nullable();
			$table->string('EXT_ORDER_ID', 15)->nullable();
			$table->string('EXT_ORDER_TYPE_CODE', 4)->nullable();
			$table->string('SPECIMEN_TYPE_CODE_INITIAL', 4)->nullable();
			$table->string('ADDED_BY_ID', 30)->nullable();
			$table->string('MODIFIED_BY_ID', 30)->nullable();
			$table->date('ADDED_DATE')->nullable();
			$table->date('MODIFIED_DATE')->nullable();
			$table->string('ADDED_AT_WS_NO', 30);
			$table->string('ADDED_FACILITY_ID', 2);
			$table->string('MODIFIED_AT_WS_NO', 30);
			$table->string('MODIFIED_FACILITY_ID', 2);
			$table->string('STATUS', 1)->nullable();
			$table->string('ANATOMY_USER_MARKER_CODE', 4)->nullable();
			$table->string('CATEGORY_LINK', 30)->nullable()->index();
			$table->string('PRIORITY_YN', 1)->nullable();
			$table->index(['SPECIMEN_NO','ORDERED_FACILITY_ID']);
			$table->index(['REQUEST_CHECK','SECTION_CODE']);
			$table->index(['CATEGORY_NUMBER','CATEGORY_YEAR','CATEGORY_CODE','OPERATING_FACILITY_ID']);
			$table->index(['SPEC_REGD_DATE_TIME','OPERATING_FACILITY_ID']);
			$table->unique(['SPECIMEN_NO','OPERATING_FACILITY_ID']);
			$table->index(['SOURCE_TYPE','SOURCE_CODE']);
			$table->index(['OPERATING_FACILITY_ID','ENCOUNTER_ID']);
			$table->unique(['PATIENT_ID','SPECIMEN_NO','OPERATING_FACILITY_ID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('RL_REQUEST_HEADER');
	}

}
