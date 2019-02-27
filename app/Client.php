<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['user_id','verified','customer_no','application_no','application_categoryy','date_of_enrollment','location','application_category','salutation','DOB','first_name','middle_name','last_name','occupation','co_salutation',',co_first_name','co_DOB','co_middle_name','co_last_name','relationship_with_applicant','name_of_building','road','area','city','state','country','postal_code','mobile','alternate_mobile','email','campaign_id','declaration_place_one','declaration_date_one','declaration_place_two','declaration_date_two','fclp_category','fclp_price','fclp_down_payment','fclp_mode_of_payment','fclp_card_number','fclp_expiry_date','fclp_authorization_number','fclp_date','fclp_card_type','fclp_card_issue_bank_name','fclp_bank_name','fclp_instrument_number','fclp_account_holder_name','fclp_account_holder_number','emi_amount','emi_regular_plan','emi_mode_of_payment','emi_credit_card_number','emi_credit_card_expiry_date','emi_credit_card_type','emi_credit_card_issue_bank_name','emi_ach_bank_name','emi_ach_date','emi_cheque_bank_name','emi_cheque_date','emi_cheque_instrument_no_from','emi_cheque_instrument_no_to','emi_cheque_micr_no','emi_cheque_ifsc_code','emi_cheque_sample_instrument_no','emi_cheque_account_holder_name','emi_account_holder_no','kyc_id_proof','kyc_id_ref_no','kyc_id_pan_no','kyc_address_proof','kyc_address_ref_no',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
