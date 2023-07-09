<?php
require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
    $mail->isSMTP();  
    $mail->Host       = $_ENV['SMTP_HOST']; 
    $mail->SMTPAuth   = true;
    $mail->Username   = $_ENV['SMTP_USERNAME'];  
    $mail->Password   = $_ENV['SMTP_PASSWORD'];                           
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;                        //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($_ENV['SMTP_USERNAME']);
    $mail->addAddress($_ENV['CLIENT_EMAIL']);
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