<?php
$to = 'maryjane@email.com';
$subject = 'Booking';
$message = 'Hi Jane, will you marry me?'; 
$from = 'nandpatel5499@gmail.com';
$headers = "From: $from";
 
// Sending email
if(mail($to, $subject, $message,$headers    )){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>
