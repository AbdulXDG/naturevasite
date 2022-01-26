<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    
    $email_from = "site.abdulxdg@gmail.com"
    
    $email_subject = "Mail From Website"

    $email_body = 
    "User Name: $name. \n".
    "User Email: $visitor_email. \n". 
    "User Message: $message. \n";


    $to = "abdulhameed55681@gmail.com" ;

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor \r\n";

    mail($to, $headers, $email_subject, $email_body);

    header("Location: contact.html");

    if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
        if (mail ($to, $subject, $body, $from)) {
            $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
        }
    }
        }
    ?>