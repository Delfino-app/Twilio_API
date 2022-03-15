<?php
use Twilio\Rest\Client;

class twilio{

    

    public function senSMS($from,$text){

        // Your Account SID and Auth Token from twilio.com/console
        $account_sid = TW_ACOUNT_SID;
        $auth_token = TW_ACOUNT_TOKEN;
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

        // A Twilio number you own with SMS capabilities
        $twilio_number = TW_ACOUNT_NUMBER;

        $client = new Client($account_sid, $auth_token);
        $client->messages->create(
            // Where to send a text message (your cell phone?)
            $from,
            array(
                'from' => $twilio_number,
                'body' => $text
            )
        );
    }

    public function sendWhatsapp(){


        // Find your Account SID and Auth Token at twilio.com/console
        // and set the environment variables. See http://twil.io/secure
        $sid = TW_ACOUNT_SID;
        $token = TW_ACOUNT_TOKEN;
        $twilio = new Client($sid, $token);

        $message = $twilio
        ->messages
        ->create("whatsapp:+111111111", // to
            [
                "from" => "whatsapp:".TW_ACOUNT_NUMBER,
                "body" => "Hello there!"
            ]
        );

        print($message->sid);
    }
}