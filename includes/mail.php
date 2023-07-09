<?php
//var_dump($_POST);

require __DIR__ . '/../vendor/autoload.php';

    if (file_exists(__DIR__ . '/../.env')) {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
        $dotenv->load();
    }

$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$address = $_POST['address'];
$message = $_POST['message'];

$subject = 'New form submission from ' . $name;

$body = "Name: " . $name . "\n\nPhone Number: " . $number . "\n\nEmail: " . $email . "\n\nAddress: " . $address . "\n\nMessage: " . $message;

$to = 'mkleczkajr@gmail.com' . ',' . 'kerryzbest@gmail.com';
$headers = 'From: ' . $email;

if (mail($to, $subject, $body, $headers)) {
    echo 'Message has been sent';
} else {
    echo 'Message could not be sent';
}
?>
