<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Session;

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
        return view('client.index')->with('clients',Client::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
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
        $client->application_category = $request->application_category;
        $client->salutation = $request->salutation;
        $client->DOB = $request->DOB;
        $client->first_name = $request->first_name;
        $client->middle_name = $request->middle_name;
        $client->last_name = $request->last_name;
        $client->occupation = $request->occupation;
        $client->name_authorized_signatory = $request->name_authorized_signatory;
        $client->designation_authorized_signatory = $request->designation_authorized_signatory;


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


        $client->declaration_email_one = $request->declaration_email_one;
        $client->declaration_date_one = $request->declaration_date_one;


        $client->declaration_email_two = $request->declaration_email_two;
        $client->declaration_date_two = $request->declaration_date_two;


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
        

        $client->save();
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
        return view('client.edit')->with('client',Client::find($id));
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
        dd(true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
