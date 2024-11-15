<?php
var_dump($_POST);

$to = "deepak8368567592@gmail.com";        // The recipient's email address
$subject = "Test Email from PHP";     // The subject of the email
$message = "Hello, this is a test email sent from PHP.";  // The body of the email
$headers = "From: deepak92059sharma@gmail.com"; // The sender's email address

// Send the email
// if(mail($to, $subject, $message, $headers)) {
//     echo "Email sent successfully.";
// } else {
//     echo "Email sending failed.";
// }



?>