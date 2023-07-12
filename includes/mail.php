<?php

require __DIR__ . '/../vendor/autoload.php';
use Mailgun\Mailgun;

$response = array(
    'success' => false,
    'message' => 'An error occurred while processing your request.'
);

if (file_exists(__DIR__ . '/../.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();
}

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

        $subject = 'New form submission from ' . $name;
        $body = "Name: " . $name . "\n\nPhone Number: " . $number . "\n\nEmail: " . $email . "\n\nAddress: " . $address . "\n\nMessage: " . $message;
        
        // Instantiate the client.
        $mgClient = Mailgun::create($_ENV['MAILGUN_API_KEY']);
        $domain = $_ENV['MAILGUN_DOMAIN'];

        // error_log("Subject: $subject");
        // error_log("Body: $body");
        //error_log("$mgClient");
        // error_log("$domain");

        try {
            // Make the call to the client.
            $result = $mgClient->messages()->send($domain, [
                'from'    => 'New Lead! <lead@' . $domain . '>',
                'to'      => 'Baz <mkleczkajr@gmail.com>',
                'subject' => $subject,
                'text'    => $body
            ]);

            if ($result) {
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
            error_log($e->getMessage());
            echo json_encode([
                'success' => false,
                'message' => 'We encountered a problem trying to send your message successfully. Please try again or contact us directly.',
                'error' => $e->getMessage() // Include this only if you want the client-side to see the detailed error message
            ]);
        }
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Please fill in all required fields.'
        ]);
    }
}