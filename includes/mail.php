<?php
//ini_set('display_errors', 0);
 require __DIR__ . '/../vendor/autoload.php';

if (file_exists(__DIR__ . '/../.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();
}

use SendGrid\Mail\Mail;

$response = array(
    'success' => false,
    'message' => 'An error occurred while processing your request.'
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name'], $_POST['number'], $_POST['email'], $_POST['address'], $_POST['message'])) {
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
        $number = htmlspecialchars($_POST['number'], ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
        $address = htmlspecialchars($_POST['address'], ENT_QUOTES, 'UTF-8');
        $message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

        // Check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response['message'] = 'Please enter a valid email address.';
            header('Content-Type: application/json');
            echo json_encode($response);
            exit();
        }

        $subject = 'New form submission from '.$name;

        $body = "Name: ".$name."\n\nPhone Number: ".$number."\n\nEmail: ".$email."\n\nAddress: ".$address."\n\nMessage: ".$message;

        $mail = new Mail();
        $mail->setFrom('mkleczkajr@gmail.com', 'Precision Painting');
        $mail->addTo('mkleczkajr@gmail.com', 'Precision Painting Team');
        $mail->setSubject($subject);
        $mail->addContent("text/plain", $body);

        $sendgrid = new SendGrid($_ENV['SENDGRID_API_KEY']);

        try {
            $response = $sendgrid->send($mail);

            if ($response->statusCode() === 202) {
                echo json_encode([
                    'success' => true,
                    'message' => 'Your message has been sent. We will be in touch with you soon!'
                ]);
            } else {
                echo json_encode([
                    'success' => false,
                    'message' => 'We were not able to send your message successfully. Please try again or contact us directly.'
                ]);
            }

        } catch (Exception $e) {
            echo json_encode([
                'success' => false,
                'message' => 'We encountered a problem trying to send your message successfully. Please try again or contact us directly.'
            ]);
        }
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Please fill in all required fields.'
        ]);
    }
}
