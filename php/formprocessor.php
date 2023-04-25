<?php
    if(!isset($_POST['Submit']))
    {
        echo "Error: You need to submit the form!";
    }

    $visitorEmail = $_POST["email"];

    if(empty($name) || empty($visitorEmail))
    {
        echo "Error: You need to submit the form!";
        exit;
    }

    $emailFrom = "3StyleDesigns@gmail.com";
    $emailSubject = "New Subscription";
    $emailMessage = "New Subscriber: $visitorEmail";

    $to = "3StyleDesigns@gmail.com";
    $headers = "from: $emailFrom \r\n";

    mail($to, $emailSubject, $emailMessage, $headers);
>