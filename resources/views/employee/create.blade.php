@extends('layouts.frontend')
@section('title')
Create Employees
@stop
@section('header')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Employees</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('home')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Employees</li>
            </ol>
        </div>
    </div>
@stop
@section('content')

    <div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> First / Sole Application Details</h2>
            </div>
            <div class="box-content">
                <form role="form">
                  <div class="control-group col-md-6">
                    <label class="control-label" for="selectError">Application Category</label>

                    <div class="controls">
                        <select id="selectError" data-rel="chosen">
                            <option>Individual</option>
                            <option>Joint</option>
                        </select>
                    </div>
                </div>
                <div class="control-group col-md-6">
                    <label class="control-label" for="selectError">Salutation</label>

                    <div class="controls">
                        <select id="selectError" data-rel="chosen">
                            <option>Mr.</option>
                            <option>Ms.</option>
                            <option>Mrs.</option>
                        </select>
                    </div>
                </div>
                <br>
                 
                
                    
                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">DOB</label>
                        <input type="date" class="form-control" id="dob" placeholder="DOB">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">First Name</label>
                        <input type="text" class="form-control" id="first_name" placeholder="First_Name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Middle Name</label>
                        <input type="text" class="form-control" id="middle_name" placeholder="Password">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Last Name</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Password">
                    </div>
                    <div class="control-group col-md-12">
                    <label class="control-label" for="selectError">Occupation</label>

                    <div class="controls col-md-12">
                        <select id="Occupation" data-rel="chosen">
                            <option>Salaried</option>
                            <option>Business</option>
                            <option>Self-Employed</option>
                        </select>
                    </div>
                    
                    
                </div>
                <div class="form-group col-md-6">
                        <label for="signature">Name of Authorised Signatory</label>
                        <input type="text" class="form-control" id="signature" placeholder="signature">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Designation of Authorised Signatory</label>
                        <input type="text" class="form-control" id="designation" placeholder="Designation">
                    </div>
                    <br><br><br><br><br><br><br><br><br>
                    <br><br><br><br><br><br><br><br>
                    <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>Co-Applicant Details</h2>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label" for="salutation">Salutation</label>

                    <div class="controls">
                        <select id="salutation_one" data-rel="chosen">
                            <option>Mr.</option>
                            <option>Ms.</option>
                            <option>Mrs.</option>
                        </select>
                    </div>
                </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">First Name</label>
                        <input type="text" class="form-control" id="first_name_one" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Middle Name</label>
                        <input type="text" class="form-control" id="Middle_name" placeholder="middle_name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Last Name</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Last Name">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Relationship with applicant</label>
                        <input type="text" class="form-control" id="relationship_applicant" placeholder="Relationship with applicant">
                    </div>
                    <br><br><br><br><br><br><br><br><br><br><br>
                    
                <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Communication Address and Contact Details of First/Sole Applicant</h2>
                </div>
                
                <div class="form-group has-success col-md-4">
                    <label class="control-label" for="inputSuccess1">Name of Building</label>
                    <input type="text" class="form-control" id="name_of_building">
                </div>
                <div class="form-group has-success col-md-4">
                    <label class="control-label" for="inputSuccess1">Road/Street</label>
                    <input type="text" class="form-control" id="Road_Street">
                </div>
                <div class="form-group has-success col-md-4">
                    <label class="control-label" for="inputSuccess1">Area/Locality</label>
                    <input type="text" class="form-control" id="Area_locality">
                </div>
                <div class="form-group has-success col-md-4">
                    <label class="control-label" for="inputSuccess1">City</label>
                    <input type="text" class="form-control" id="City">
                </div>
                <div class="form-group has-success col-md-4">
                    <label class="control-label" for="inputSuccess1">State</label>
                    <input type="text" class="form-control" id="State">
                </div>
                <div class="form-group has-success col-md-4">
                    <label class="control-label" for="inputSuccess1">Country</label>
                    <input type="text" class="form-control" id="Country">
                </div>

                <div class="form-group has-success col-md-4">
                    <label class="control-label" for="inputSuccess1">Postal Code</label>
                    <input type="text" class="form-control" id="Postal_code">
                </div>  
                <div class="form-group has-success col-md-4">
                    <label class="control-label" for="inputSuccess1">Mobile Number</label>
                    <input type="number" class="form-control" id="Mobile_number">
                </div>
                <div class="form-group has-success col-md-4">
                    <label class="control-label" for="inputSuccess1">Alternate Mobile Number</label>
                    <input type="number" class="form-control" id="alternative_mbile_number">
                </div>  
                <div class="form-group has-success col-md-4">
                    <label class="control-label" for="inputSuccess1">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>  
                    <br><br><br><br><br>
                    <br><br><br><br><br>
                    <br><br><br><br><br><br>
                    
                <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>Program and Campaign Details</h2>
                </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Campaign ID</label>
                        <input type="text" class="form-control" id="campaign_id" placeholder="Campaign ID">
                    </div>
                    
                    
                
                    
                <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Customer Declaration</h2>
                </div>
                <div class="col-md-12">
                I Hereby certify that the details furnished above are accurate and true to the best of my knowledge
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Place</label>
                        <input type="email" class="form-control" id="Place" placeholder="Enter email">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Date</label>
                        <input type="date" class="form-control" id="date" placeholder="Enter email">
                    </div>
                        <br> <br> <br> <br> <br> <br>
                
                                
                
                <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>FCLP Details</h2>
                </div>
                    <div class="form-group col-md-12">
                    <label class="control-label" for="selectError">Salutation</label>

                    <div class="controls">
                        <select id="salutation" data-rel="chosen">
                            <option>Exclusive India</option>
                            <option>Classic</option>
                            <option>Imperia</option>
                            <option>Luxe</option>
                            <option>Royale</option>

                        </select>
                    </div>
                </div>
<br><br><br><br>
                <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>FCLP Details</h2>
                </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">FCLP Price(INR)</label>
                        <input type="text" class="form-control" id="FCLP_Price" placeholder="price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Down Payment Amount</label>
                        <input type="text" class="form-control" id="down_payment_amount">
                    </div>
                    <div class="form-group col-md-12">
                    <label class="control-label" for="selectError">Mode of Payment</label>

                    <div class="controls">
                        <select id="selectError" data-rel="chosen">
                            <option>Credit Card</option>
                            <option>Debit Card</option>
                            <option>Cash</option>
                            <option>Cheque</option>
                            

                        </select>
                    </div>
                </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Card Number</label>
                        <input type="number" class="form-control" id="card_number">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Exp. Date</label>
                        <input type="date" class="form-control" id="exp_date">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Authorization Number</label>
                        <input type="number" class="form-control" id="authorization_number">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Date</label>
                        <input type="date" class="form-control" id="date">
                    </div>
                    
                    <div class="form-group col-md-4">
                         <label class="control-label" for="selectError">Card Type</label>

                    <div class="col-md-12">
                        <select id="card_type" data-rel="chosen">
                            <option>Visa</option>
                            <option>Master</option>
                            <option>Diners</option>
                            <option>Amex</option>
                            

                        </select>
                    </div>
                    </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Card Issue Bank Name</label>
                            <input type="text" class="form-control" id="card_issue_bank_name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Bank Name and Branch</label>
                            <input type="text" class="form-control" id="Bank_name_and_branch">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Date</label>
                            <input type="date" class="form-control" id="date">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Instrument Number</label>
                            <input type="number" class="form-control" id="instrument_number">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Account Holder Name</label>
                            <input type="text" class="form-control" id="acc_hol_name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Account Holder Number</label>
                            <input type="number" class="form-control" id="acc_hol_email">
                        </div>
                        <br><br><br><br>



                    <br><br><br><br><br><br>
                    <br><br><br><br><br><br>
                    <br><br><br><br><br><br>
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>EMI Plan</h2>
                </div>
                <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label class="control-label" for="selectError">Regular Plan</label>

                    <div class="controls">
                        <select id="reg_plan" data-rel="chosen">
                            <option>6</option>
                            <option>12</option>
                            <option>18</option>
                            <option>24</option>
                        </select>
                    </div>
                </div> 
                <div class="form-group col-md-6">
                    <label class="control-label" for="selectError">Mode of Payment</label>

                    <div class="controls">
                        <select id="mode_of_pay" data-rel="chosen">
                            <option>Credit Card</option>
                            <option>ACH</option>
                            <option>Cheque</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12"><b><center>For Credit Card</center></b></div>
                <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Credit Card Number</label>
                            <input type="number" class="form-control" id="credit_card_number">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Expiry Date</label>
                            <input type="date" class="form-control" id="expiry_date">
                        </div>
                         <div class="form-group col-md-3">
                         <label class="control-label" for="selectError">Card Type</label>

                    <div class="col-md-12">
                        <select id="selectError" data-rel="chosen">
                            <option>Visa</option>
                            <option>Master</option>
                            <option>Diners</option>
                            <option>Amex</option>
                            

                        </select>
                    </div>
                    </div>
                    <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Card issue Bank Name</label>
                            <input type="text" class="form-control" id="bank_name_issuer">
                        </div>

                    <div class="col-md-12"><b><center>For ACH</center></b></div>
                <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Bank Name</label>
                            <input type="text" class="form-control" id="bank_name">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Date</label>
                            <input type="date" class="form-control" id="Date">
                        </div>
                
                 <div class="col-md-12"><b><center>For Cheque</center></b></div>
                <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Bank Name</label>
                            <input type="text" class="form-control" id="Bank_Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Date</label>
                            <input type="date" class="form-control" id="date">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Instrument No. From</label>
                            <input type="text" class="form-control" id="instrument_no_form">
                        </div>
                        
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Dt.</label>
                            <input type="text" class="form-control" id="dt">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Instrument No. To</label>
                            <input type="text" class="form-control" id="instru_number">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Date</label>
                            <input type="date" class="form-control" id="date5">
                        </div>

                        <div class="form-group col-md-4">MICR No.</label>
                            <input type="text" class="form-control" id="MICR_no">
                        </div> 

                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">IFSC Code</label>
                            <input type="text" class="form-control" id="IFSC_code">
                        </div>                   

                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Sample Instrument No.</label>
                            <input type="text" class="form-control" id="sample_instrument">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Account Holder Name</label>
                            <input type="text" class="form-control" id=account_hol_name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Account Holder Number</label>
                            <input type="number" class="form-control" id="acc_hol_name">
                        </div>
                        <br><br><br><br><br><br>
                        <br><br><br><br><br><br>
                        <br><br><br><br><br><br>
                        <br><br><br><br><br><br>
                        <br><br><br><br><br><br>
                        <br><br><br><br><br><br>
                        <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Customer Declaration</h2>
                </div>
                <div class="col-md-12">
                I Hereby certify that the details furnished above are accurate and true to the best of my knowledge
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Place</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Date</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                        <br> <br> <br> <br> <br> <br>
                
                </div>        
                    <!-- <button type="submit" class="btn btn-default">Submit</button> -->
                </form>
            </div>
        </div>
    </div>
    <!--/span-->
</div><!--/row-->

      <div class="row">
                        <div class="col-sm-12">
                             <div class="card-box">
                                 <div class="card-head">
                                     <header>Verticle Steps</header>
                                 </div>
                                 <div id="example-vertical">
                                    <h3>Keyboard</h3>
                                    <section>
                                        <p>Try the keyboard navigation by clicking arrow left or right!</p>
                                    </section>
                                    <h3>Effects</h3>
                                    <section>
                                        <p>Wonderful transition effects.</p>
                                    </section>
                                    <h3>Pager</h3>
                                    <section>
                                        <p>The next and previous buttons help you to navigate through your content.</p>
                                    </section>
                                </div>
                             </div>
                         </div>
                    </div>

   


@stop