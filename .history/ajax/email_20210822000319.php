<?php
    require '../phpmailer/PHPMailerAutoload.php';

    
    /* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(TRUE);


$mail = new PHPMailer(TRUE);

// SMTP auth
$mail->IsSMTP();
$mail->Host         = 'email-smtp.us-east-1.amazonaws.com';
$mail->Port         = 587;
$mail->SMTPAuth     = true;
$mail->SMTPSecure   ='tls';

$mail->Username     = 'AKIA4TG5H7TEZR4FHACK';
$mail->Password     = 'BDz4eB5xyzlQVidGiwt3ZV89Tb1bMF+u3jTinCmM0/qE';



/* Open the try/catch block. */
// Passing `true` enables exceptions
    try {
        /* Set the mail sender. */
   $mail->setFrom('ghiovani999@gmail.com', 'Darth Vader');

   /* Add a recipient. */
   $mail->addAddress('ghiovani999@gmail.com', 'Emperor');

   /* Set the subject. */
   $mail->Subject = 'Force';

   /* Set the mail message body. */
   $mail->Body = 'There is a great disturbance in the Force.';

   /* Finally send the mail. */
   $mail->send();

    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    ?>