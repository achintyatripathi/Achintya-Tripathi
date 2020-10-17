<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $email_subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $email_from = 'dlwithat@gmail.com';

    $email_body = "User Name: $name.\n".
                        "User Email: $visitor_emal.\n".
                            "Subject: $email_subject.\n".
                                "User Message: $message.\n";

    $to = "achintyatripathi14@gmail.com";
    
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$hearders)or die("Error!");    
?>
