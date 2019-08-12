<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    

    $email_from = 'valaya.choudhary@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name. \n"
                    "User_Email: $visito_email. \n"
                        "User Message: $message. \n "
    
        
    $to = "valaya.choudhary@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: Feedback_form.html");
?>