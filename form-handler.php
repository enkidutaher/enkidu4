<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email-form = 'sammuhsen65@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "UUser Name:$name.\n".
              "User Email:$visitor_email.\n".
              "Subjekt: $subject.\n".
              "ser Message: $message .\n";
$to = 'sammhsen65@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Replay-to: $visitor_email \r\r";

mail($to,$email_sbject,$email_body,$headers);

header("Location: contact.html");

?>