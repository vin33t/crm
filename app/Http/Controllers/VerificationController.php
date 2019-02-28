<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Mail;
use App\verification;

class VerificationController extends Controller
{
    public function verifyDetails($token)
    {
        // Look up the invite
        if (!$verification = verification::where('verify_token', $token)->first()) {
            //if the invite doesn't exist do something more graceful than this
            abort(404);
        }

        $verification->client->verified = 1;
        $verification->client->save();

        // here you would probably log the user in and show them the dashboard, but we'll just prove it worked

        return redirect()->route('home');
    }

    public function notVerifyDetails($token)
    {
        // Look up the invite
        if (!$verification = verification::where('not_verify_token', $token)->first()) {
            //if the invite doesn't exist do something more graceful than this
            abort(404);
        }

        $verification->client->verified = 0;
        $verification->client->save();


        $contactEmail = $verification->client->user->email;
        $data = array('client'=>$verification->client);
        Mail::send('emails.clientNotVerified', $data, function($message) use ($contactEmail)
        {  
            $message->to($contactEmail)->subject('Your Client is not verified');
        });
        // here you would probably log the user in and show them the dashboard, but we'll just prove it worked

        return redirect()->route('home');
    }

    public function verifyAgain($id){
        $client = Client::find($id);
        $contactEmail = $client->email;
        $data = array('client'=>$client);
        Mail::send('emails.client', $data, function($message) use ($contactEmail)
        {  
            $message->to($contactEmail)->subject('Verify your Details');
        });
        Session::flash('info','Verification Sent!!');
        return redirect()->back();
    }
}
