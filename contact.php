<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $mobile_no = $_POST['mobile'];
    $message = $_POST['message'];


    $email_from = "admin@ramkabir.me";
    $email_subject = "New meassage from ramkabir.me";
    $email_body = "Name: $name\n". 
                    "Email: $visitor_email.\n".
                        "Mobile: $mobile_no. \n".
                        "Message: $message.\n";

    $to = "ramkabir2816@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Replt-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
?>