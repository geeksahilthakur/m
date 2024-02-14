<?php
// Define recipient and sender
$to = "itssahilthakur@gmail.com";
$subject = "Test Email";
$message = "This is a test email.";
$headers = "From: s@isro.gov.in";

// Send email
if (mail($to, $subject, $message, $headers)) {
    // Email sent successfully
    // You can log this event or perform additional actions if needed
    // For example, you can log the email sending activity to a file or database
    file_put_contents('email_log.txt', "Email sent to: $to\n", FILE_APPEND);
} else {
    // Email sending failed
    // You can handle this scenario as needed, such as logging the failure or displaying an error message
    file_put_contents('email_log.txt', "Email sending failed to: $to\n", FILE_APPEND);
}

// Optionally, you can redirect the user to another page after the email is sent
// header("Location: success.php");
?>
