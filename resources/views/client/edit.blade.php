@extends('layouts.frontend')
@section('title')
Edit Client
@stop
@section('header')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Edit Client</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('home')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="{{route('clients')}}">Clients</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Edit Client</li>
            </ol>
        </div>
    </div>
@stop
@section('content')

    <div class="row">
        <div class="col-md-12">
        <form action="{{route('client.update',['id'=>$client->id])}}" method="post">
        @csrf
        	
        	<div class="card card-box">
                <div class="card-head">
                    <header>Application Form for purchase of Forb Clun Leisureship</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body no-padding height-9">
                	<div class="row">
                		<div class="col-md-6">
							<label for="customer_no">Customer No:</label>
							<input name="customer_no" id="" readonly required value="{{$client->customer_no}}">
						</div>
						<div class="col-md-6">
							<label for="application_no">Application No:</label>
							<input name="application_no" id="" readonly required value="{{$client->application_no}}"><br><br>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<label for="application_categoryy">Application category:</label>
							<select name="application_categoryy" id="" class="form-control" required>
								<option value="individual" {{($client->application_categoryy == 'individual')?'selected':''}}>Individual</option>
								<option value="joint" {{($client->application_categoryy == 'joint')?'selected':''}}>Joint</option>
								<option value="Sole" {{($client->application_categoryy == 'Sole')?'selected':''}}>Sole</option>
								<option value="Either Or Survivor" {{($client->application_categoryy == 'Either Or Survivor')?'selected':''}}>Either Or Survivor</option>
							</select>
						</div>
						<div class="col-md-4">
							<label for="date_of_enrollment">Date of Enrollment:</label>
							<input type="date" value="{{$client->date_of_enrollment}}" name="date_of_enrollment" class="form-control" required >
						</div>
						<div class="col-md-4">
							<label for="location">Location:</label>
							<input type="text" name="location" class="form-control" required value="{{$client->location}}">
						</div>
					</div>	
                </div>
            </div>

        	<div class="card card-box">
                <div class="card-head">
                    <header>First / Sole Application Details</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body no-padding height-9">
                	<div class="row">
                		<div class="col-md-3">
							<label for="application_category">Application category:</label>
							<select name="application_category" id="" class="form-control" required>
								<option value="individual" {{($client->application_category == 'individual')?'selected':''}}>Individual</option>
								<option value="joint" {{($client->application_category == 'joint')?'selected':''}}>Joint</option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="salutation">Salutation:</label>
							<select name="salutation" id="" class="form-control" required>
								<option value="Mr." {{($client->salutation == 'Mr.')?'selected':''}}>Mr.</option>
								<option value="Mrs." {{($client->salutation == 'Mrs.')?'selected':''}}>Mrs.</option>
								<option value="Miss." {{($client->salutation == 'Miss.')?'selected':''}}>Miss.</option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="DOB">DOB:</label>
							<input type="date" name="DOB" class="form-control" required value="{{$client->DOB}}">
						</div>
						<div class="col-md-3">
							<label for="occupation">Occupation:</label>
							<select name="occupation" id="" class="form-control" required>
								<option value="Salaried" {{($client->occupation == 'Salaried')?'selected':''}}>Salaried</option>
								<option value="Business" {{($client->occupation == 'Business')?'selected':''}}>Business</option>
								<option value="Self-Employed" {{($client->occupation == 'Self-Employed')?'selected':''}}>Self-Employed</option>
							</select>
						</div>
					</div>
					<div class="row">
                		<div class="col-md-4">
							<label for="first_name">First Name:</label>
							<input type="text" name="first_name" class="form-control" required value="{{$client->first_name}}">
						</div>
						<div class="col-md-4">
							<label for="middle_name">Middle Name:</label>
							<input type="text" name="middle_name" class="form-control" required value="{{$client->middle_name}}">
						</div>
						<div class="col-md-4">
							<label for="last_name"> Last Name:</label>
							<input type="text" name="last_name" class="form-control" required value="{{$client->last_name}}">
						</div>
					</div>
                </div>
            </div>

            <div class="card card-box">
                <div class="card-head">
                    <header>Co-Application Details</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body no-padding height-9">
                	<div class="row">
						<div class="col-md-6">
							<label for="co_salutation">Salutation:</label>
							<select name="co_salutation" id="" class="form-control" required>
								<option value="Mr." {{($client->co_salutation == 'Mr.')?'selected':''}}>Mr.</option>
								<option value="Mrs." {{($client->co_salutation == 'Mrs.')?'selected':''}}>Mrs.</option>
								<option value="Miss." {{($client->co_salutation == 'Miss.')?'selected':''}}>Miss.</option>
							</select>
						</div>
						<div class="col-md-4">
							<label for="relationship_with_applicant"> Relationship with Applicant:</label>
							<input type="text" name="relationship_with_applicant" class="form-control" required value="{{$client->relationship_with_applicant}}">
						</div>
						<div class="col-md-4">
							<label for="co_DOB"> DOB:</label>
							<input type="date" name="co_DOB" class="form-control" required value="{{$client->co_DOB}}">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<label for="co_first_name">First Name:</label>
							<input type="text" name="co_first_name" class="form-control" required value="{{$client->co_first_name}}">
						</div>
						<div class="col-md-4">
							<label for="co_middle_name">Middle Name:</label>
							<input type="text" name="co_middle_name" class="form-control" required value="{{$client->co_middle_name}}">
						</div>
						<div class="col-md-4">
							<label for="co_last_name"> Last Name:</label>
							<input type="text" name="co_last_name" class="form-control" required value="{{$client->co_last_name}}">
						</div>
					</div>
                </div>
            </div>

            <div class="card card-box">
                <div class="card-head">
                    <header>Communication Address and Contact Details of First/Sole Applicant</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body no-padding height-9">
                	<div class="row">
						<div class="col-md-4">
							<label for="name_of_building">Name Of Building:</label>
							<input type="text" name="name_of_building" class="form-control" required value="{{$client->name_of_building}}">
						</div>
						<div class="col-md-4">
							<label for="road"> Road/Street:</label>
							<input type="text" name="road" class="form-control" required value="{{$client->road}}">
						</div>
						<div class="col-md-4">
							<label for="area"> Area/Locality:</label>
							<input type="text" name="area" class="form-control" required value="{{$client->area}}">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label for="city">City:</label>
							<input type="text" name="city" class="form-control" required value="{{$client->city}}">
						</div>
						<div class="col-md-3">
							<label for="state"> State:</label>
							<input type="text" name="state" class="form-control" required value="{{$client->state}}">
						</div>
						<div class="col-md-3">
							<label for="country"> Country:</label>
							<input type="text" name="country" class="form-control" required value="{{$client->country}}">
						</div>
						<div class="col-md-3">
							<label for="postal_code"> Postal Code:</label>
							<input type="text" name="postal_code" class="form-control" required value="{{$client->postal_code}}">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<label for="mobile">Mobile Number:</label>
							<input type="text" name="mobile" class="form-control" required value="{{$client->mobile}}">
						</div>
						<div class="col-md-4">
							<label for="alternate_mobile">Alternate Mobile Number:</label>
							<input type="text" name="alternate_mobile" class="form-control" required value="{{$client->alternate_mobile}}">
						</div>
						<div class="col-md-4">
							<label for="email"> Email:</label>
							<input type="email" name="email" class="form-control" required value="{{$client->email}}">
						</div>
					</div>
                </div>
            </div>

            <div class="card card-box">
                <div class="card-head">
                    <header>Program & Campaign Details</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body no-padding height-9">
                	<div class="row">
                		<div class="col-md-6">
                			<label for="campaign_id">Campaign Id:</label>
							<input type=text" name="campaign_id" class="form-control"  required value="{{$client->campaign_id}}">
						</div>
					</div>
                </div>
            </div>

            <div class="card card-box">
                <div class="card-head">
                    <header>Customer Declaration</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body no-padding height-9">
                	<div class="row">
                		<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I Hereby certify that the details furnished above are accurate and true to the best of my knowledge Place.</strong><br><br>
                		<div class="col-md-6">
							<input type=text" name="declaration_place_one" class="form-control" placeholder="Enter Place" required value="{{$client->declaration_place_one}}">
						</div>
						<div class="col-md-6">
							<input type="date" name="declaration_date_one" class="form-control" required value="{{$client->declaration_date_one}}">
						</div>
						
					</div>
                </div>
            </div>

            <div class="card card-box">
                <div class="card-head">
                    <header>FCLP Details</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body no-padding height-9">
                	<div class="row">
						<div class="col-md-4">
							<label for="fclp_category"> Category:</label>
							<select name="fclp_category" id="" class="form-control" required>
								<option value="Exclusive India" {{($client->fclp_category == 'Exclusive India')?'selected':''}}>Exclusive India</option>
								<option value="Classic" {{($client->fclp_category == 'Classic')?'selected':''}}>Classic</option>
								<option value="Imperia" {{($client->fclp_category == 'Imperia')?'selected':''}}>Imperia</option>
								<option value="Luxe" {{($client->fclp_category == 'Luxe')?'selected':''}}>Luxe</option>
								<option value="Royale" {{($client->fclp_category == 'Royale')?'selected':''}}>Royale</option>
							</select>
						</div>
					</div>	
            	</div>
            </div>

            <div class="card card-box">
                <div class="card-head">
                    <header>Payment Details</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body no-padding height-9">
                	<div class="row">
						<div class="col-md-4">
							<label for="fclp_price">FCLP Price:</label>
							<input type="text" name="fclp_price" class="form-control" required value="{{$client->fclp_price}}">
						</div>
						<div class="col-md-4">
							<label for="fclp_down_payment"> Down Payment Amount:</label>
							<input type="text" name="fclp_down_payment" class="form-control" required value="{{$client->fclp_down_payment}}">
						</div>
						<div class="col-md-4">
							<label for="fclp_mode_of_payment"> Mode Of Payment:</label>
							<select name="fclp_mode_of_payment" id="" class="form-control" required>
								<option value="Credit Card" {{($client->fclp_mode_of_payment == 'Credit Card')?'selected':''}}>Credit Card</option>
								<option value="Debit Card" {{($client->fclp_mode_of_payment == 'Debit Card')?'selected':''}}>Debit Card</option>
								<option value="Cash" {{($client->fclp_mode_of_payment == 'Cash')?'selected':''}}>Cash</option>
								<option value="Cheque" {{($client->fclp_mode_of_payment == 'Cheque')?'selected':''}}>Cheque</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label for="fclp_card_number">Card Number:</label>
							<input type="text" name="fclp_card_number" class="form-control" required value="{{$client->fclp_card_number}}">
						</div>
						<div class="col-md-3">
							<label for="fclp_expiry_date"> Expiry date:</label>
							<input type="date" name="fclp_expiry_date" class="form-control" required value="{{$client->fclp_expiry_date}}">
						</div>
						<div class="col-md-3">
							<label for="fclp_authorization_number"> Authorization Number:</label>
							<input type="text" name="fclp_authorization_number" class="form-control" required value="{{$client->fclp_authorization_number}}">
						</div>
						<div class="col-md-3">
							<label for="fclp_date"> Date:</label>
							<input type="date" name="fclp_date" class="form-control" required value="{{$client->fclp_date}}">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<label for="fclp_card_type"> Card Type:</label>
							<select name="fclp_card_type" id="" class="form-control" required>
								<option value="Visa" {{($client->fclp_card_type == 'Visa')?'selected':''}}>Visa</option>
								<option value="Master" {{($client->fclp_card_type == 'Master')?'selected':''}}>Master</option>
								<option value="Diners" {{($client->fclp_card_type == 'Diners')?'selected':''}}>Diners</option>
								<option value="Amex" {{($client->fclp_card_type == 'Amex')?'selected':''}}>Amex</option>
							</select>
						</div>
						<div class="col-md-4">
							<label for="fclp_card_issue_bank_name">Card Issue Bank Name:</label>
							<input type="text" name="fclp_card_issue_bank_name" class="form-control" required value="{{$client->fclp_card_issue_bank_name}}">
						</div>
						<div class="col-md-4">
							<label for="fclp_bank_name"> Bank Name:</label>
							<input type="text" name="fclp_bank_name" class="form-control" required  value="{{$client->fclp_bank_name}}">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<label for="fclp_instrument_number">Instrument Number:</label>
							<input type="text" name="fclp_instrument_number" class="form-control" required value="{{$client->fclp_instrument_number}}">
						</div>
						<div class="col-md-4">
							<label for="fclp_account_holder_name"> Account Holder Name:</label>
							<input type="text" name="fclp_account_holder_name" class="form-control" required value="{{$client->fclp_account_holder_name}}">
						</div>
						<div class="col-md-4">
							<label for="fclp_account_holder_number"> Acccount Holder Number:</label>
							<input type="text" name="fclp_account_holder_number" class="form-control" required value="{{$client->fclp_account_holder_number}}">
						</div>
					</div>
                </div>
            </div>

            <div class="card card-box">
                <div class="card-head">
                    <header>EMI Plan</header>
                    <div class="tools">
                    	<label for="emi_amount"><strong>EMI Amount(Rs.):</strong></label>
						<input type="text" name="emi_amount" required value="{{$client->emi_amount}}">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body no-padding height-9">
                	<div class="row">
                		<div class="col-md-6">
							<label for="emi_regular_plan">Regular Plan:</label>
							<select name="emi_regular_plan" id="" class="form-control" required>
								<option value="6" {{($client->emi_regular_plan == '6')?'selected':''}}>6</option>
								<option value="12" {{($client->emi_regular_plan == '12')?'selected':''}}>12</option>
								<option value="18" {{($client->emi_regular_plan == '18')?'selected':''}}>18</option>
								<option value="24" {{($client->emi_regular_plan == '24')?'selected':''}}>24</option>
							</select>
						</div>
						<div class="col-md-6">
							<label for="emi_mode_of_payment">Mode Of Payment:</label>
							<input name="emi_mode_of_payment" id="emi" class="form-control" value="{{$client->emi_mode_of_payment}}" readonly required>
								
						</div>
					</div>
						@if($client->emi_mode_of_payment == 'Credit Card')
							<div class="row">
								<div class="col-md-6">
									<label for="emi_credit_card_number">Credit Card Number:</label>
									<input type="text" name="emi_credit_card_number" id="" class="form-control" required value="{{$client->emi_credit_card_number}}">
								</div>
								<div class="col-md-6">
									<label for="emi_credit_card_expiry_date">Expiry Date:</label>
									<input type="date" name="emi_credit_card_expiry_date" id="" class="form-control" required value="{{$client->emi_credit_card_expiry_date}}">	
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label for="emi_credit_card_type"> Card Type:</label>
									<select name="emi_credit_card_type" id="" class="form-control" required><option value="Visa" {{($client->emi_credit_card_type == 'Visa')?'selected':''}}>Visa</option>
										<option value="Master" {{($client->emi_credit_card_type == 'Master')?'selected':''}}>Master</option>			
										<option value="Diners" {{($client->emi_credit_card_type == 'Diners')?'selected':''}}>Diners</option>
										<option value="Amex" {{($client->emi_credit_card_type == 'Amex')?'selected':''}}>Amex</option>		
									</select>
								</div>
								<div class="col-md-6">
									<label for="emi_credit_card_issue_bank_name">Card Issue Bank Name:</label>
									<input type="date" name="emi_credit_card_issue_bank_name" id="" class="form-control" required value="{{$client->emi_credit_card_issue_bank_name}}">
								</div>
							</div>
						@elseif($client->emi_mode_of_payment == 'ACH')
							<div class="row">
								<div class="col-md-6">
									<label for="emi_ach_bank_name">Bank Name:</label>
									<input type="text" name="emi_ach_bank_name" id="" class="form-control" required value="{{$client->emi_ach_bank_name}}">
								</div>
								<div class="col-md-6">
									<label for="emi_ach_date">Date:</label>
									<input type="date" name="emi_ach_date" id="" class="form-control" required value="{{$client->emi_ach_date}}">
								</div>
							</div>
						@elseif($client->emi_mode_of_payment == 'Cheque')
							<div class="row">
								<div class="col-md-6">
									<label for="emi_cheque_bank_name">Bank Name:</label>
									<input type="text" name="emi_cheque_bank_name" id="" class="form-control" required value="{{$client->emi_cheque_bank_name}}">
								</div>
								<div class="col-md-6">
									<label for="emi_cheque_date">Date:</label>
									<input type="date" name="emi_cheque_date" id="" class="form-control" required value="{{$client->emi_cheque_date}}">
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label for="emi_cheque_instrument_no_from"> Instrument No. From:</label><input type="text" name="emi_cheque_instrument_no_from" id="" class="form-control" required value="{{$client->emi_cheque_instrument_no_from}}">
								</div>
								<div class="col-md-4">
									<label for="emi_cheque_instrument_no_to">Instrument No. To:</label>
									<input type="text" name="emi_cheque_instrument_no_to" id="" class="form-control" required value="{{$client->emi_cheque_instrument_no_to}}">
								</div>
								<div class="col-md-4">
									<label for="emi_cheque_micr_no">MICR No:</label>
									<input type="text" name="emi_cheque_micr_no" id="" class="form-control" required value="{{$client->emi_cheque_micr_no}}">
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label for="emi_cheque_ifsc_code"> IFSC Code:</label>		
									<input type="text" name="emi_cheque_ifsc_code" id="" class="form-control" required value="{{$client->emi_cheque_ifsc_code}}">
								</div>
								<div class="col-md-3">
									<label for="emi_cheque_sample_instrument_no">Sample Instrument No.</label>
									<input type="text" name="emi_cheque_sample_instrument_no" id="" class="form-control" required value="{{$client->emi_cheque_sample_instrument_no}}">
								</div>
								<div class="col-md-3">
									<label for="emi_cheque_account_holder_name">Account Holder Name:</label><input type="text" name="emi_cheque_account_holder_name" id="" class="form-control" required value="{{$client->emi_cheque_account_holder_name}}">
								</div>
								<div class="col-md-3">
									<label for="emi_cheque_account_holder_no">Account Holder Number:</label><input type="text" name="emi_account_holder_no" id="" class="form-control" required value="{{$client->emi_account_holder_no}}">
								</div>
							</div>
						@endif
                </div>
            </div>

            <div class="card card-box">
                <div class="card-head">
                    <header>Customer Declaration</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body no-padding height-9">
                	<div class="row">
                		<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I Hereby certify that the details furnished above are accurate and true to the best of my knowledge Place.</strong><br><br>
                		<div class="col-md-6">
							<input type="text" name="declaration_place_two" class="form-control" placeholder="Enter Place" required value="{{$client->declaration_place_two}}">
						</div>
						<div class="col-md-6">
							<input type="date" name="declaration_date_two" class="form-control" required value="{{$client->declaration_date_two}}">
						</div>
						
					</div>
                </div>
            </div>
			
			<div class="card card-box">
                <div class="card-head">
                    <header>KYC Document</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body no-padding height-9">
                	<div class="row">
                		<div class="col-md-4">
							<label for="kyc_id_proof">ID Proof:</label>
							<select name="kyc_id_proof" id="" class="form-control" required>
								<option value="Ration Card" {{($client->kyc_id_proof == 'Ration Card')?'selected':''}}>Ration Card</option>
								<option value="Voter ID" {{($client->kyc_id_proof == 'Voter ID')?'selected':''}}>Voter ID</option>
								<option value="Passport" {{($client->kyc_id_proof == 'Passport')?'selected':''}}>Passport</option>
								<option value="Driving License" {{($client->kyc_id_proof == 'Driving License')?'selected':''}}>Driving License</option>
								<option value="Aadhar Card" {{($client->kyc_id_proof == 'Aadhar Card')?'selected':''}}>Aadhar Card</option>
							</select>
						</div>
						<div class="col-md-4">
							<label for="kyc_id_ref_no">Ref Number:</label>
							<input type="text" name="kyc_id_ref_no" class="form-control" required value="{{$client->kyc_id_ref_no}}">
						</div>
						<div class="col-md-4">
							<label for="kyc_id_pan_no">PAN Number:</label>
							<input type="text" name="kyc_id_pan_no" class="form-control" required value="{{$client->kyc_id_pan_no}}">
						</div>
					</div>
					<div class="row">
                		<div class="col-md-4">
							<label for="kyc_address_proof">Address Proof:</label>
							<select name="kyc_address_proof" id="" class="form-control" required>
								<option value="Ration Card" {{($client->kyc_address_proof == 'Ration Card')?'selected':''}}>Ration Card</option>
								<option value="Voter ID" {{($client->kyc_address_proof == 'Voter ID')?'selected':''}}>Voter ID</option>
								<option value="Passport" {{($client->kyc_address_proof == 'Passport')?'selected':''}}>Passport</option>
								<option value="Driving License" {{($client->kyc_address_proof == 'Driving License')?'selected':''}}>Driving License</option>
								<option value="Aadhar Card" {{($client->kyc_address_proof == 'Aadhar Card')?'selected':''}}>Aadhar Card</option>
							</select>
						</div>
						<div class="col-md-4">
							<label for="kyc_address_ref_no">Ref Number:</label>
							<input type="text" name="kyc_address_ref_no" class="form-control" required value="{{$client->kyc_address_ref_no}}">
						</div>
					</div>	
                </div>
            </div>

            <div class="text-center">
            	<button type="submit" class="btn btn-xs btn-primary">Update Client</button>
            </div>
        </form>
		</div>
	</div>



@stop
