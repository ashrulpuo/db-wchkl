<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMPPATIENTTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('MP_PATIENT', function(Blueprint $table)
		{
			$table->string('PATIENT_ID', 20)->primary();
			$table->string('PAT_SER_GRP_CODE', 3)->index();
			$table->date('REGN_DATE')->nullable()->index();
			$table->string('OLD_PATIENT_ID', 20)->nullable()->index();
			$table->string('NATIONAL_ID_NO', 20)->nullable()->unique();
			$table->string('ALT_ID1_TYPE', 4)->nullable();
			$table->string('ALT_ID1_NO', 20)->nullable()->index();
			$table->date('ALT_ID1_EXP_DATE')->nullable();
			$table->string('ALT_ID2_TYPE', 4)->nullable();
			$table->string('ALT_ID2_NO', 20)->nullable()->index();
			$table->date('ALT_ID2_EXP_DATE')->nullable();
			$table->string('ALT_ID3_TYPE', 4)->nullable();
			$table->string('ALT_ID3_NO', 20)->nullable()->index();
			$table->date('ALT_ID3_EXP_DATE')->nullable();
			$table->string('ALT_ID4_TYPE', 4)->nullable();
			$table->string('ALT_ID4_NO', 20)->nullable()->index();
			$table->date('ALT_ID4_EXP_DATE')->nullable();
			$table->string('OTH_ALT_ID_TYPE', 4)->nullable();
			$table->string('OTH_ALT_ID_NO', 20)->nullable();
			$table->integer('NEWBORN_ID_NO_SUFFIX')->nullable();
			$table->string('DATA_SOURCE', 4)->nullable();
			$table->string('CONTACT1_MODE', 4)->nullable();
			$table->string('CONTACT1_STATUS', 1)->nullable();
			$table->string('CONTACT1_NO', 20)->nullable()->index();
			$table->string('CONTACT2_MODE', 4)->nullable();
			$table->string('CONTACT2_STATUS', 1)->nullable();
			$table->string('CONTACT2_NO', 20)->nullable()->index();
			$table->string('CONTACT3_MODE', 4)->nullable();
			$table->string('CONTACT3_STATUS', 1)->nullable();
			$table->string('CONTACT3_NO', 20)->nullable()->index();
			$table->string('CONTACT4_MODE', 4)->nullable();
			$table->string('CONTACT4_STATUS', 1)->nullable();
			$table->string('CONTACT4_NO', 20)->nullable()->index();
			$table->string('CONTACT5_MODE', 4)->nullable();
			$table->string('CONTACT5_STATUS', 1)->nullable();
			$table->string('CONTACT5_NO', 20)->nullable()->index();
			$table->string('EMAIL_ID', 50)->nullable();
			$table->string('REGION_CODE', 6)->nullable();
			$table->string('RES_AREA_CODE', 6)->nullable()->index();
			$table->string('RES_TOWN_CODE', 6)->nullable();
			$table->string('RES_TOWN_DESC', 15)->nullable();
			$table->string('FAMILY_ORG_ID', 10)->nullable()->index();
			$table->string('FAMILY_LINK_NO', 20)->nullable()->index();
			$table->string('RELATIONSHIP_TO_HEAD', 4)->nullable();
			$table->string('NAME_PREFIX', 80)->nullable()->index();
			$table->string('FIRST_NAME', 80)->nullable();
			$table->string('SECOND_NAME', 80)->nullable();
			$table->string('THIRD_NAME', 80)->nullable();
			$table->string('FAMILY_NAME_PREFIX', 80)->nullable();
			$table->string('FAMILY_NAME', 80)->nullable();
			$table->string('NAME_SUFFIX', 80)->nullable()->index();
			$table->string('PATIENT_NAME', 100);
			$table->string('NAME_PREFIX_LOC_LANG', 80)->nullable();
			$table->string('FIRST_NAME_LOC_LANG', 80)->nullable();
			$table->string('SECOND_NAME_LOC_LANG', 80)->nullable();
			$table->string('THIRD_NAME_LOC_LANG', 80)->nullable();
			$table->string('FAMILY_NAME_LOC_LANG', 80)->nullable();
			$table->string('NAME_SUFFIX_LOC_LANG', 80)->nullable();
			$table->string('PATIENT_NAME_LOC_LANG', 100)->nullable();
			$table->string('GENERIC_SNDX_FIRST', 6)->nullable()->index();
			$table->string('GENERIC_SNDX_SECOND', 6)->nullable()->index();
			$table->string('GENERIC_SNDX_THIRD', 6)->nullable()->index();
			$table->string('GENERIC_SNDX_FAMILY', 6)->nullable()->index();
			$table->string('GENERIC_SNDX_FIRST_SECOND', 6)->nullable()->index();
			$table->string('GENERIC_SNDX_FIRST_FAMILY', 6)->nullable()->index();
			$table->string('ETHNIC_SNDX_FIRST', 20)->nullable()->index();
			$table->string('ETHNIC_SNDX_SECOND', 20)->nullable()->index();
			$table->string('ETHNIC_SNDX_THIRD', 20)->nullable()->index();
			$table->string('ETHNIC_SNDX_FAMILY', 20)->nullable()->index();
			$table->string('ETHNIC_SNDX_FIRST_SECOND', 20)->nullable()->index();
			$table->string('ETHNIC_SNDX_FIRST_FAMILY', 20)->nullable()->index();
			$table->string('SEX', 1)->index();
			$table->date('DATE_OF_BIRTH')->index();
			$table->string('CALCULATED_AGE_YN', 1)->default('N');
			$table->string('MAR_STATUS_CODE', 1)->nullable();
			$table->string('ALIAS_NAME', 30)->nullable();
			$table->string('MOTHER_MAIDEN_NAME', 30)->nullable();
			$table->string('PUBLICITY_LEVEL', 1)->nullable()->default('1');
			$table->string('PROTECTION_IND', 1)->nullable()->default('1');
			$table->string('CODED_PSEUDO_NAME', 30)->nullable();
			$table->string('RACE_CODE', 10)->nullable();
			$table->string('ETHNIC_GRP_CODE', 10)->nullable();
			$table->string('RELGN_CODE', 4)->nullable()->index();
			$table->string('RELGN_SECT_CODE', 4)->nullable();
			$table->string('NATIONALITY_CODE', 4)->nullable()->index();
			$table->string('CITIZEN_YN', 1)->default('N');
			$table->string('LEGAL_YN', 1)->default('N');
			$table->string('BIRTH_PLACE_CODE', 2)->nullable();
			$table->string('PLACE_OF_BIRTH', 30)->nullable();
			$table->string('PAT_CAT_CODE', 4)->nullable();
			$table->string('PRIMARY_LANGUAGE_ID', 4)->nullable();
			$table->string('SPL_HANDLING_CODE', 4)->nullable();
			$table->string('REFERRAL_FACILITY_ID', 2)->nullable();
			$table->string('REF_SOURCE_CODE', 6)->nullable();
			$table->string('REF_PHYSICIAN_ID', 6)->nullable();
			$table->string('PRIMARY_CARE_PHYSICIAN_ID', 6)->nullable();
			$table->string('GUARANTOR_TYPE', 1)->nullable();
			$table->string('PAT_GUARANTOR_YN', 1)->nullable()->default('N');
			$table->string('GUARANTOR_ID', 15)->nullable();
			$table->string('GUARANTOR_NAME', 30)->nullable();
			$table->string('GUARANTOR_RELN_CODE', 4)->nullable();
			$table->integer('ANNUAL_FAMILY_INCOME')->nullable();
			$table->integer('HOUSEHOLD_SIZE')->nullable();
			$table->integer('FAMILY_ASSETS_VALUE')->nullable();
			$table->string('FINANCIAL_CLASS', 2)->nullable();
			$table->string('STUDENT_IND', 1)->nullable();
			$table->string('SLMT_IND', 1)->nullable();
			$table->string('SLMT_TYPE_CODE', 2)->nullable();
			$table->string('SLMT_DOC_REF', 20)->nullable();
			$table->date('SLMT_DOC_DATE')->nullable();
			$table->string('SLMT_DOC_REMARKS', 30)->nullable();
			$table->string('PREF_FACILITY_ID', 2)->nullable();
			$table->string('REGN_FACILITY_ID', 2);
			$table->string('EMEG_REGN_YN', 1)->default('N');
			$table->string('PAT_DTLS_UNKNOWN_YN', 1)->default('N');
			$table->string('INHOUSE_BIRTH_YN', 1)->default('N');
			$table->string('GENERAL_ALERT', 500)->nullable();
			$table->string('ACTIVE_YN', 1)->default('Y');
			$table->string('SUSPEND_YN', 1)->default('N');
			$table->string('STATUS_REASON_CODE', 4)->nullable();
			$table->string('STATUS_REMARKS', 500)->nullable();
			$table->string('INACT_ACT_REASON_CODE', 4)->nullable();
			$table->string('INACT_ACT_REMARKS', 500)->nullable();
			$table->date('LAST_CONTACT_DATE')->nullable();
			$table->string('DECEASED_YN', 1)->default('N');
			$table->date('DECEASED_DATE')->nullable();
			$table->string('DEATH_STATUS_REMARKS', 250)->nullable();
			$table->string('BED_ASSIGNED_FOR_NB_YN', 1)->default('N');
			$table->string('DISASTER_REGN_YN', 1)->default('N');
			$table->string('PAT_PHOTO_IN_DB_YN', 1)->default('N');
			$table->string('REGISTERED_IN_MO_YN', 1)->default('N');
			$table->string('DECEASED_FACILITY_ID', 2)->nullable();
			$table->integer('DECEASED_ENCOUNTER_ID')->nullable();
			$table->string('FAMILY_ORG_SUB_ID', 10)->nullable();
			$table->string('FAMILY_ORG_MEMBERSHIP', 1)->nullable();
			$table->date('PAT_CAT_CODE_EXP_DATE')->nullable();
			$table->string('MOTHER_PATIENT_ID', 20)->nullable()->index();
			$table->string('FATHER_PATIENT_ID', 20)->nullable()->index();
			$table->string('CURR_PATIENT_CLASS', 2)->nullable();
			$table->string('ENC_FACILITY_ID', 2)->nullable();
			$table->integer('CURR_ENCOUNTER_ID')->nullable();
			$table->string('LANGUAGE_ID', 2)->nullable();
			$table->string('ADDED_BY_ID', 30);
			$table->date('ADDED_DATE');
			$table->string('ADDED_AT_WS_NO', 30);
			$table->string('ADDED_FACILITY_ID', 2);
			$table->string('MODIFIED_BY_ID', 30);
			$table->date('MODIFIED_DATE');
			$table->string('MODIFIED_AT_WS_NO', 30);
			$table->string('MODIFIED_FACILITY_ID', 2);
			$table->string('COMBINED_REL_LEVEL_CODE', 16)->nullable();
			$table->string('KNOWN_ALLERGY_YN', 1)->default('U');
			$table->string('EYE_INDICATOR', 2)->nullable();
			$table->string('PATIENT_LONG_NAME', 300)->nullable();
			$table->string('PATIENT_LONG_NAME_LOC_LANG', 300)->nullable();
			$table->string('HIJRI_BIRTH_DATE', 10)->nullable();
			$table->string('FORM_60_YN', 1)->nullable()->default('N');
			$table->string('DOWNTIME_REGN_YN', 1)->default('N');
			$table->string('MYHIX_CONSENT', 1)->nullable();
			$table->string('MYHIX_ID', 400)->nullable();
			$table->string('PAN_CARD_STATUS', 1)->nullable();
			$table->string('PAN_CARD_HOLDER_NAME', 130)->nullable();
			$table->integer('INT_TRANSACTION_ID')->nullable();
			$table->string('PAN_RELATION', 1)->nullable();
			$table->string('AADHAAR_CARD_STATUS', 1)->nullable()->default('N');
			$table->integer('AADHAAR_TRANS_ID')->nullable();
			$table->integer('CDR_COUNT')->nullable();
			$table->string('BLOOD_DONOR', 1)->nullable();
			$table->string('VISA_TYPE', 1)->nullable();
			$table->string('UPLOADED_PAT_YN', 1)->nullable();
			$table->unique(['PATIENT_ID','ALT_ID1_NO','NEWBORN_ID_NO_SUFFIX']);
			$table->index(['REGN_FACILITY_ID','DECEASED_YN']);
			$table->index(['PATIENT_ID','SUSPEND_YN']);
			$table->index(['FIRST_NAME','SECOND_NAME']);
			$table->index(['PATIENT_ID','NATIONALITY_CODE','RACE_CODE','LEGAL_YN']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('MP_PATIENT');
	}

}
