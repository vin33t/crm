<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
</head>
<body>
	<h2>Hello!!, Please Verify Your Details: </h2>
	<h3>First / Sole Application Details</h3>
        <h4>{{'Application Category'}} : {{$client->application_category}}</h4>
        <h4>{{'Salutation'}} : {{$client->salutation}}</h4>
        <h4>{{'DOB'}} : {{$client->DOB}}</h4>
        <h4>{{'First Name'}} : {{$client->first_name}}</h4>
        <h4>{{'Middle Name'}} : {{$client->middle_name}}</h4>
        <h4>{{'last Name'}} : {{$client->last_name}}</h4>
        <h4>{{'Occupation'}} : {{$client->occupation}}</h4>

	<h3>Co-Application Details</h3>
        <h4>{{'Salutation'}} : {{$client->co_salutation}}</h4>
        <h4>{{'DOB'}} : {{$client->co_DOB}}</h4>
        <h4>{{'First Name'}} : {{$client->co_first_name}}</h4>
        <h4>{{'Middle Name'}} : {{$client->co_middle_name}}</h4>
        <h4>{{'Last Name'}} : {{$client->co_last_name}}</h4>
        <h4>{{'Relationship With Applicant'}} : {{$client->relationship_with_applicant}}</h4>

	<h3>Communication Address and Contact Details of First/Sole Applicant</h3>
        <h4>{{'Name Of Building'}} : {{$client->name_of_building}}</h4>
        <h4>{{'Road'}} : {{$client->road}}</h4>
        <h4>{{'Area'}} : {{$client->area}}</h4>
        <h4>{{'City'}} : {{$client->city}}</h4>
        <h4>{{'State'}} : {{$client->state}}</h4>
        <h4>{{'Country'}} : {{$client->country}}</h4>
        <h4>{{'Postal Code'}} : {{$client->postal_code}}</h4>
        <h4>{{'Mobile'}} : {{$client->mobile}}</h4>
        <h4>{{'Alternate Mobile'}} : {{$client->alternate_mobile}}</h4>
        <h4>{{'Email'}} : {{$client->email}}</h4>

	<h3>Program & Campaign Details</h3>
        <h4>{{'Campaign Id'}} : {{$client->campaign_id}}</h4>

	<h3>FCLP Details</h3>
        <h4>{{'Category'}} : {{$client->fclp_category}}</h4>
	
	<h3>Payment Details</h3>
        <h4>{{'price'}} : {{$client->fclp_price}}</h4>
        <h4>{{'down_payment'}} : {{$client->fclp_down_payment}}</h4>
        <h4>{{'mode_of_payment'}} : {{$client->fclp_mode_of_payment}}</h4>
        <h4>{{'card_number'}} : {{$client->fclp_card_number}}</h4>
        <h4>{{'expiry_date'}} : {{$client->fclp_expiry_date}}</h4>
        <h4>{{'authorization_number'}} : {{$client->fclp_authorization_number}}</h4>
        <h4>{{'date'}} : {{$client->fclp_date}}</h4>
        <h4>{{'card_type'}} : {{$client->fclp_card_type}}</h4>
        <h4>{{'card_issue_bank_name'}} : {{$client->fclp_card_issue_bank_name}}</h4>
        <h4>{{'bank_name'}} : {{$client->fclp_bank_name}}</h4>
        <h4>{{'instrument_number'}} : {{$client->fclp_instrument_number}}</h4>
        <h4>{{'account_holder_name'}} : {{$client->fclp_account_holder_name}}</h4>
        <h4>{{'account_holder_number'}} : {{$client->fclp_account_holder_number}}</h4>
	
	<h3>EMI Plan</h3>
        <h4>{{'amount'}} : {{$client->emi_amount}}</h4>
        <h4>{{'regular_plan'}} : {{$client->emi_regular_plan}}</h4>
        <h4>{{'mode_of_payment'}} : {{$client->emi_mode_of_payment}}</h4>


        <h4>{{'credit_card_number'}} : {{$client->emi_credit_card_number}}</h4>
        <h4>{{'credit_card_expiry_date'}} : {{$client->emi_credit_card_expiry_date}}</h4>
        <h4>{{'credit_card_type'}} : {{$client->emi_credit_card_type}}</h4>
        <h4>{{'credit_card_issue_bank_name'}} : {{$client->emi_credit_card_issue_bank_name}}</h4>


        <h4>{{'bank_name'}} : {{$client->emi_ach_bank_name}}</h4>
        <h4>{{'date'}} : {{$client->emi_ach_date}}</h4>


        <h4>{{'bank_name'}} : {{$client->emi_cheque_bank_name}}</h4>
        <h4>{{'date'}} : {{$client->emi_cheque_date}}</h4>
        <h4>{{'instrument_no_from'}} : {{$client->emi_cheque_instrument_no_from}}</h4>
        <h4>{{'instrument_no_to'}} : {{$client->emi_cheque_instrument_no_to}}</h4>
        <h4>{{'micr_no'}} : {{$client->emi_cheque_micr_no}}</h4>
        <h4>{{'ifsc_code'}} : {{$client->emi_cheque_ifsc_code}}</h4>
        <h4>{{'sample_instrument_no'}} : {{$client->emi_cheque_sample_instrument_no}}</h4>
        <h4>{{'account_holder_name'}} : {{$client->emi_cheque_account_holder_name}}</h4>
        <h4>{{'account_holder_no'}} : {{$client->emi_account_holder_no}}</h4>
    <h3>KYC Document</h3>  
        <h4>{{'id_proof'}} : {{$client->kyc_id_proof}}</h4>
        <h4>{{'id_ref_no'}} : {{$client->kyc_id_ref_no}}</h4>
        <h4>{{'id_pan_no'}} : {{$client->kyc_id_pan_no}}</h4>
        <h4>{{'address_proof'}} : {{$client->kyc_address_proof}}</h4>
        <h4>{{'address_ref_no'}} : {{$client->kyc_address_ref_no}}</h4>

    <h3><a href="{{route('verify',['token'=>$client->verify_token])}}">Click here</a>to verify your details </h3>
    <h3>or <a href="{{route('notVerify',['token'=>$client->not_verify_token])}}">Click here</a>if you are not satisfied and want to edit </h3>
</body>
</html>