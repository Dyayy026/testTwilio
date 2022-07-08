<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>hello</h1>
</body>
</html>
<?php

    require_once 'vendor/autoload.php';
    use Twilio\TwiML\MessagingResponse;

    $response = new MessagingResponse();

    $body = strtolower($_REQUEST['Body']);

    if($body == 'arjay')
    {
        $response->message("Hello youtube!");
    }else
    {
        $response->message("I prefer youtube");
    }
    print $response;
    print $body;

    //need to fix ngrok
?>