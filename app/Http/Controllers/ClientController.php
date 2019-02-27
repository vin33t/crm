<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Session;
use Auth;
use Mail;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        if(Auth::user()->admin){
            $clients = Client::all();
        }
        else{
            $clients = Client::where('user_id',Auth::user()->id)->get();
        }
        return view('client.index')->with('clients',$clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $client = client::where('customer_no','0001')->get();
        if ($client->count()>0) {
            $latest = client::orderBy('created_at','desc')->take(1)->get();
            $client_prev_customer_no = $latest[0]->customer_no;
            $customer_no = '000'.($client_prev_customer_no + 1);
            $client_prev_application_no = $latest[0]->application_no;
            $application_no = '000'.($client_prev_application_no + 1);
        }
        else{
            $customer_no = '0001';
            $application_no = '0001';
        }

        return view('client.create')->with('customer_no',$customer_no)
                                    ->with('application_no',$application_no);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $client = new Client;
        $client->user_id = Auth::user()->id;

        $client->customer_no = $request->customer_no;
        $client->application_no = $request->application_no;
        $client->application_categoryy = $request->application_categoryy;
        $client->date_of_enrollment = $request->date_of_enrollment;
        $client->location = $request->location;

        $client->application_category = $request->application_category;
        $client->salutation = $request->salutation;
        $client->DOB = $request->DOB;
        $client->first_name = $request->first_name;
        $client->middle_name = $request->middle_name;
        $client->last_name = $request->last_name;
        $client->occupation = $request->occupation;


        $client->co_salutation = $request->co_salutation;
        $client->co_DOB = $request->co_DOB;
        $client->co_first_name = $request->co_first_name;
        $client->co_middle_name = $request->co_middle_name;
        $client->co_last_name = $request->co_last_name;
        $client->relationship_with_applicant = $request->relationship_with_applicant;


        $client->name_of_building = $request->name_of_building;
        $client->road = $request->road;
        $client->area = $request->area;
        $client->city = $request->city;
        $client->state = $request->state;
        $client->country = $request->country;
        $client->postal_code = $request->postal_code;
        $client->mobile = $request->mobile;
        $client->alternate_mobile = $request->alternate_mobile;
        $client->email = $request->email;

        $client->campaign_id = $request->campaign_id;

        $client->declaration_place_one = $request->declaration_place_one;
        $client->declaration_date_one = $request->declaration_date_one;


        $client->declaration_place_two = $request->declaration_place_two;
        $client->declaration_date_two = $request->declaration_date_two;

        $client->fclp_category = $request->fclp_category;

        $client->fclp_price = $request->fclp_price;
        $client->fclp_down_payment = $request->fclp_down_payment;
        $client->fclp_mode_of_payment = $request->fclp_mode_of_payment;
        $client->fclp_card_number = $request->fclp_card_number;
        $client->fclp_expiry_date = $request->fclp_expiry_date;
        $client->fclp_authorization_number = $request->fclp_authorization_number;
        $client->fclp_date = $request->fclp_date;
        $client->fclp_card_type = $request->fclp_card_type;
        $client->fclp_card_issue_bank_name = $request->fclp_card_issue_bank_name;
        $client->fclp_bank_name = $request->fclp_bank_name;
        $client->fclp_instrument_number = $request->fclp_instrument_number;
        $client->fclp_account_holder_name = $request->fclp_account_holder_name;
        $client->fclp_account_holder_number = $request->fclp_account_holder_number;

        $client->emi_amount = $request->emi_amount;
        $client->emi_regular_plan = $request->emi_regular_plan;
        $client->emi_mode_of_payment = $request->emi_mode_of_payment;


        $client->emi_credit_card_number = $request->emi_credit_card_number;
        $client->emi_credit_card_expiry_date = $request->emi_credit_card_expiry_date;
        $client->emi_credit_card_type = $request->emi_credit_card_type;
        $client->emi_credit_card_issue_bank_name = $request->emi_credit_card_issue_bank_name;


        $client->emi_ach_bank_name = $request->emi_ach_bank_name;
        $client->emi_ach_date = $request->emi_ach_date;


        $client->emi_cheque_bank_name = $request->emi_cheque_bank_name;
        $client->emi_cheque_date = $request->emi_cheque_date;
        $client->emi_cheque_instrument_no_from = $request->emi_cheque_instrument_no_from;
        $client->emi_cheque_instrument_no_to = $request->emi_cheque_instrument_no_to;
        $client->emi_cheque_micr_no = $request->emi_cheque_micr_no;
        $client->emi_cheque_ifsc_code = $request->emi_cheque_ifsc_code;
        $client->emi_cheque_sample_instrument_no = $request->emi_cheque_sample_instrument_no;
        $client->emi_cheque_account_holder_name = $request->emi_cheque_account_holder_name;
        $client->emi_account_holder_no = $request->emi_account_holder_no;
        
        $client->kyc_id_proof = $request->kyc_id_proof;
        $client->kyc_id_ref_no = $request->kyc_id_ref_no;
        $client->kyc_id_pan_no = $request->kyc_id_pan_no;
        $client->kyc_address_proof = $request->kyc_address_proof;
        $client->kyc_address_ref_no = $request->kyc_address_ref_no;
        do {
            //generate a random string using Laravel's str_random helper
            $verify_token = str_random();
        } //check if the token already exists and if it does, try again
        while (Client::where('verify_token', $verify_token)->first());
        do {
            //generate a random string using Laravel's str_random helper
            $not_verify_token = str_random();
        } //check if the token already exists and if it does, try again
        while (Client::where('not_verify_token', $not_verify_token)->first());
        $client->verify_token = $verify_token;
        $client->not_verify_token = $not_verify_token;
        $client->save();

        $contactEmail = $client->email;
        $data = array('client'=>$client);
        Mail::send('emails.client', $data, function($message) use ($contactEmail)
        {  
            $message->to($contactEmail)->subject('Verify your Details');
        });

        
        Session::flash('success',' New Client Created!!');
        return redirect()->route('clients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $client = Client::find($id);
        if (!Auth::user()->admin and $client->verified == 1) {
            $this->middleware('admin');
            Session::flash('warning','you do not have permission to access this functionality');
            return redirect()->back();
        }
        return view('client.edit')->with('client',$client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::find($id);

        $client->customer_no = $request->customer_no;
        $client->application_no = $request->application_no;
        $client->application_categoryy = $request->application_categoryy;
        $client->date_of_enrollment = $request->date_of_enrollment;
        $client->location = $request->location;

        $client->application_category = $request->application_category;
        $client->salutation = $request->salutation;
        $client->DOB = $request->DOB;
        $client->first_name = $request->first_name;
        $client->middle_name = $request->middle_name;
        $client->last_name = $request->last_name;
        $client->occupation = $request->occupation;

        $client->co_DOB = $request->co_DOB;
        $client->co_salutation = $request->co_salutation;
        $client->co_first_name = $request->co_first_name;
        $client->co_middle_name = $request->co_middle_name;
        $client->co_last_name = $request->co_last_name;
        $client->relationship_with_applicant = $request->relationship_with_applicant;


        $client->name_of_building = $request->name_of_building;
        $client->road = $request->road;
        $client->area = $request->area;
        $client->city = $request->city;
        $client->state = $request->state;
        $client->country = $request->country;
        $client->postal_code = $request->postal_code;
        $client->mobile = $request->mobile;
        $client->alternate_mobile = $request->alternate_mobile;
        $client->email = $request->email;

        $client->campaign_id = $request->campaign_id;

        $client->declaration_place_one = $request->declaration_place_one;
        $client->declaration_date_one = $request->declaration_date_one;


        $client->declaration_place_two = $request->declaration_place_two;
        $client->declaration_date_two = $request->declaration_date_two;

        $client->fclp_category = $request->fclp_category;

        $client->fclp_price = $request->fclp_price;
        $client->fclp_down_payment = $request->fclp_down_payment;
        $client->fclp_mode_of_payment = $request->fclp_mode_of_payment;
        $client->fclp_card_number = $request->fclp_card_number;
        $client->fclp_expiry_date = $request->fclp_expiry_date;
        $client->fclp_authorization_number = $request->fclp_authorization_number;
        $client->fclp_date = $request->fclp_date;
        $client->fclp_card_type = $request->fclp_card_type;
        $client->fclp_card_issue_bank_name = $request->fclp_card_issue_bank_name;
        $client->fclp_bank_name = $request->fclp_bank_name;
        $client->fclp_instrument_number = $request->fclp_instrument_number;
        $client->fclp_account_holder_name = $request->fclp_account_holder_name;
        $client->fclp_account_holder_number = $request->fclp_account_holder_number;

        $client->emi_amount = $request->emi_amount;
        $client->emi_regular_plan = $request->emi_regular_plan;
        $client->emi_mode_of_payment = $request->emi_mode_of_payment;


        $client->emi_credit_card_number = $request->emi_credit_card_number;
        $client->emi_credit_card_expiry_date = $request->emi_credit_card_expiry_date;
        $client->emi_credit_card_type = $request->emi_credit_card_type;
        $client->emi_credit_card_issue_bank_name = $request->emi_credit_card_issue_bank_name;


        $client->emi_ach_bank_name = $request->emi_ach_bank_name;
        $client->emi_ach_date = $request->emi_ach_date;


        $client->emi_cheque_bank_name = $request->emi_cheque_bank_name;
        $client->emi_cheque_date = $request->emi_cheque_date;
        $client->emi_cheque_instrument_no_from = $request->emi_cheque_instrument_no_from;
        $client->emi_cheque_instrument_no_to = $request->emi_cheque_instrument_no_to;
        $client->emi_cheque_micr_no = $request->emi_cheque_micr_no;
        $client->emi_cheque_ifsc_code = $request->emi_cheque_ifsc_code;
        $client->emi_cheque_sample_instrument_no = $request->emi_cheque_sample_instrument_no;
        $client->emi_cheque_account_holder_name = $request->emi_cheque_account_holder_name;
        $client->emi_account_holder_no = $request->emi_account_holder_no;
        
        $client->kyc_id_proof = $request->kyc_id_proof;
        $client->kyc_id_ref_no = $request->kyc_id_ref_no;
        $client->kyc_id_pan_no = $request->kyc_id_pan_no;
        $client->kyc_address_proof = $request->kyc_address_proof;
        $client->kyc_address_ref_no = $request->kyc_address_ref_no;

        $client->save();

        
        Session::flash('success',' Client Updated!!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $this->middleware('admin');
        $client = Client::find($id);
        $client->delete();
        Session::flash('info','client deleted');
        return redirect()->back();
    }
}
