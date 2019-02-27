<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->boolean('verified')->default(0);
            $table->string('verify_token')->nullable();
            $table->string('not_verify_token')->nullable();

            $table->string('customer_no')->nullable();
            $table->string('application_no')->nullable();
            $table->string('application_categoryy')->nullable();
            $table->Date('date_of_enrollment')->nullable();
            $table->string('location')->nullable();

            $table->string('application_category')->nullable();
            $table->string('salutation');
            $table->Date('DOB')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('occupation')->nullable();

            $table->string('co_DOB')->nullable();
            $table->string('co_salutation')->nullable();
            $table->string('co_first_name')->nullable();
            $table->string('co_middle_name')->nullable();
            $table->string('co_last_name')->nullable();
            $table->string('relationship_with_applicant')->nullable();

            $table->string('name_of_building')->nullable();
            $table->string('road')->nullable();
            $table->string('area')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('mobile')->nullable();
            $table->string('alternate_mobile')->nullable();
            $table->string('email')->nullable();

            $table->string('campaign_id')->nullable();

            $table->string('declaration_place_one')->nullable();
            $table->string('declaration_date_one')->nullable();

            $table->string('declaration_place_two')->nullable();
            $table->string('declaration_date_two')->nullable();

            $table->string('fclp_category')->nullable();

            $table->string('fclp_price')->nullable();
            $table->string('fclp_down_payment')->nullable();
            $table->string('fclp_mode_of_payment')->nullable();
            $table->string('fclp_card_number')->nullable();
            $table->Date('fclp_expiry_date')->nullable();
            $table->string('fclp_authorization_number')->nullable();
            $table->Date('fclp_date')->nullable();
            $table->string('fclp_card_type')->nullable();
            $table->string('fclp_card_issue_bank_name')->nullable();
            $table->string('fclp_bank_name')->nullable();
            $table->string('fclp_instrument_number')->nullable();
            $table->string('fclp_account_holder_name')->nullable();
            $table->string('fclp_account_holder_number')->nullable();

            $table->string('emi_amount')->nullable();
            $table->string('emi_regular_plan')->nullable();
            $table->string('emi_mode_of_payment')->nullable();

            $table->string('emi_credit_card_number')->nullable();
            $table->Date('emi_credit_card_expiry_date')->nullable();
            $table->string('emi_credit_card_type')->nullable();
            $table->string('emi_credit_card_issue_bank_name')->nullable();

            $table->string('emi_ach_bank_name')->nullable();
            $table->Date('emi_ach_date')->nullable();

            $table->string('emi_cheque_bank_name')->nullable();
            $table->Date('emi_cheque_date')->nullable();
            $table->string('emi_cheque_instrument_no_from')->nullable();
            $table->string('emi_cheque_instrument_no_to')->nullable();
            $table->string('emi_cheque_micr_no')->nullable();
            $table->string('emi_cheque_ifsc_code')->nullable();
            $table->string('emi_cheque_sample_instrument_no')->nullable();
            $table->string('emi_cheque_account_holder_name')->nullable();
            $table->string('emi_account_holder_no')->nullable();

            $table->string('kyc_id_proof')->nullable();
            $table->string('kyc_id_ref_no')->nullable();
            $table->string('kyc_id_pan_no')->nullable();
            $table->string('kyc_address_proof')->nullable();
            $table->string('kyc_address_ref_no')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
