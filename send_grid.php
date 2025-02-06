<?php
require 'vendor/autoload.php'; // Make sure Composer's autoloader is included

use SendGrid\Mail\Mail; // Import the correct class

// Create a new Mail object
$email = new Mail(); 
$email->setFrom("avikmehta.0710@gmail.com", "Example User");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("pranjalnatani1509@gmail.com", "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);

// Replace 'YOUR_API_KEY' with your actual SendGrid API key

try {
    // Send the email
    $response = $sendgrid->send($email);
    // Output the response details
    echo $response->statusCode() . "\n";
    print_r($response->headers());
    echo $response->body() . "\n";
} catch (Exception $e) {
    // Catch and display any errors
    echo 'Caught exception: '. $e->getMessage()."\n";
}
?>