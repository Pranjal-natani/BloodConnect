<?php
include('connection.php'); // Ensure $con is correctly initialized in this file

header('Content-Type: application/json'); // Ensures response is sent as JSON

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['user'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['pass'] ?? '');

    if (empty($username) || empty($email) || empty($password)) {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT); //BCRYPT

    try {
        $token = bin2hex(random_bytes(16));
    } catch (Exception $e) {
        error_log("Token Generation Error: " . $e->getMessage(), 3, 'error.log');
        echo json_encode(['status' => 'error', 'message' => 'Failed to generate secure token.']);
        exit;
    }

    $tokenExpiry = date("Y-m-d H:i:s", strtotime('+10 hour'));

    if ($con) {
        try {
            $check = $con->prepare("SELECT * FROM user WHERE username = ? OR email = ?");
            $check->bind_param("ss", $username, $email);
            $check->execute();
            $result = $check->get_result();

            if ($result->num_rows > 0) {
                echo json_encode(['status' => 'error', 'message' => 'Username or Email already exists.']);
            } else {
                $insert = $con->prepare("INSERT INTO user (username, email, password, token, token_expiry) 
                VALUES (?, ?, ?, ?, ?)");
                $insert->bind_param("sssss", $username, $email, $hashedPassword, $token, $tokenExpiry);

                // Execute the statement once
                if ($insert->execute()) {
                    echo json_encode(['status' => 'success', 'message' => 'Signup successful!']);
                } else {
                    error_log("Database Insert Error: " . $con->error, 3, 'error.log');
                    echo json_encode(['status' => 'error', 'message' => 'An error occurred while saving your data.']);
                }
            }
        } catch (Exception $e) {
            error_log("Exception in Signup: " . $e->getMessage(), 3, 'error.log');
            echo json_encode(['status' => 'error', 'message' => 'An unexpected error occurred.']);
        }
    } else {
        error_log("Database Connection Error: " . $con->connect_error, 3, 'error.log');
        echo json_encode(['status' => 'error', 'message' => 'Failed to connect to the database.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>
