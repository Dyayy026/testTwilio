<?php

    require_once 'vendor/autoload.php';
    use Twilio\TwiML\MessagingResponse;

    $response = new MessagingResponse();
    $response->message("This is an incoming text");
    print $response;

    //need to fix ngrok
?>