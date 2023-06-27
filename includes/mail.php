<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $message = $_POST['message'];
    
    // Email subject
    $subject = 'New form submission from '.$name;
    
    // Email message
    $body = "Name: ".$name."\n\nPhone Number: ".$number."\n\nEmail: ".$email."\n\nAddress: ".$address."\n\nMessage: ".$message;
    
    // Create PHPMailer instance
    $mail = new PHPMailer(true);
try {
    //Server settings                   
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'benjaminkleczka@eventpagepro.com';                     //SMTP username
    $mail->Password   = 'Southern1236993+';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('benjaminkleczka@eventpagepro.com');
    $mail->addAddress('eventpageprorequest@outlook.com');     //Add a recipient
    $mail->addAddress('9134569564@mailmymobile.net');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Content
    $mail->isHTML(false);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}