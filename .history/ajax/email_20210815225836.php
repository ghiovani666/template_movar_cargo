<?php
    require '../phpmailer/PHPMailerAutoload.php';

    
    /* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(TRUE);

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