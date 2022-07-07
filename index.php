<?php
    require __DIR__ . '/vendor/autoload.php';
    use Twilio\Rest\Client;

    $sid = 'AC2b9e7157fb1404ad968ed982a0516dd4';
    $token = 'f77efd3f1888fd4bba8c8e403079af57';
    $client = new Client($sid, $token);

    $message = $client->messages->create(
        // the number you'd like to send the message to
        '+639076730151',
        [
            // A Twilio phone number you purchased at twilio.com/console
            'from' => '+19294292856',
            // the body of the text message you'd like to send
            'body' => 'Good job! this is a test'
        ]
    );

    if($message)
    {
        echo 'message sent!';
    }else{
        echo 'Something went wrong';
    }
?>