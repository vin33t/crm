<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Client;
use Mail;

class VerificationController extends Controller
{
    public function verifyDetails($token)
    {
        // Look up the invite
        if (!$client = Client::where('verify_token', $token)->first()) {
            //if the invite doesn't exist do something more graceful than this
            abort(404);
        }

        $client->verified = 1;
        $client->save();

        // here you would probably log the user in and show them the dashboard, but we'll just prove it worked

        return redirect()->route('home');
    }

    public function notVerifyDetails($token)
    {
        // Look up the invite
        if (!$client = Client::where('not_verify_token', $token)->first()) {
            //if the invite doesn't exist do something more graceful than this
            abort(404);
        }

        $client->verified = 0;
        $client->save();


        $contactEmail = $client->user()->email;
        $data = array('client'=>$client);
        Mail::send('emails.clientNotVerified', $data, function($message) use ($contactEmail)
        {  
            $message->to($contactEmail)->subject('Your Client is not verified');
        });
        // here you would probably log the user in and show them the dashboard, but we'll just prove it worked

        return redirect()->route('home');
    }
}
