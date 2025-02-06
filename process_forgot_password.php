<?php
use SendGrid\Mail\Mail;
require 'vendor/autoload.php';

// Connect to the database
include('connection.php');

$message = "";  // Initialize message variable

if (isset($_POST['username'])) {
    // Sanitize the input
    $username = mysqli_real_escape_string($con, trim($_POST['username']));

    // Check if the username exists in the database
    $result = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) > 0) {
        // Generate a unique reset token
        $token = bin2hex(random_bytes(16));
        $resetLink = "http://localhost/Blood-Bank-Management-System-DBMS-main/reset_password.php?token=" . $token;

        // Save the reset token to the database
        $row = mysqli_fetch_assoc($result);
        $userId = $row['id'];
        $updateQuery = "UPDATE user SET token = '$token' WHERE id = '$userId'";
        mysqli_query($con, $updateQuery);

        // SendGrid Mail
        $email = new Mail();
        $email->setFrom('avikmehta.0710@gmail.com', 'BloodConnect');
        $email->addTo($row['email']);  // Use email from the database
        $email->setSubject('Password Reset Request');
        $email->addContent(
            "text/html", 
            'Click the link to reset your password: <a href="' . $resetLink . '">Reset Password</a>'
        );

        try {
            $response = $sendgrid->send($email);
            $message = 'Password reset email has been sent to your registered email.';
        } catch (Exception $e) {
            $message = 'Error sending email: '. $e->getMessage();
        }
    } else {
        // Show error if username not found
        $message = 'Username not found in our system.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css/forgot.css">
</head>
<body style="background-image:url('P1.png'); height: 700px; background-size: cover;">
    <div class="card-container">
        <div class="card">
            <div class="header">Forgot Password</div>
            <div class="content">
                <form action="process_forgot_password.php" method="POST">
                    <div class="input-field">
                        <input type="text" class="input" name="username" placeholder="Enter your username" required>
                    </div>
                    <div class="input-field">
                        <button class="btn btnn-submit" type="submit">Send Reset Link</button>
                    </div>
                    <div class="c">
                        <button type="button" onclick="window.location.href='index.php'" class="btn btn-submit">Back To Home</button>
                    </div>
                </form>
                <br><br>
                <div class="message">
                    <?php if (!empty($message)) echo "<p>$message</p>"; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
