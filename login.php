<?php
session_start();
include('connection.php'); // Ensure $con is correctly initialized in this file

header('Content-Type: application/json'); // Ensures response is sent as JSON

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($con, trim($_POST['user']));
    $password = trim($_POST['pass']);

    if (empty($username) || empty($password)) {
        echo json_encode(['status' => 'error', 'message' => 'Username or password cannot be empty.']);
        exit;
    }

    // Prepare SQL query to fetch user data
    $stmt = $con->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $row['password'])) {
            // Set session variables on successful login
            $_SESSION["login"] = 1;
            $_SESSION["user_id"] = $row['id'];
            $_SESSION["username"] = $row['username'];
            $_SESSION["role"] = $row['role']; // Store user role in session

            // Redirect based on role
            if ($row['role'] === 'admin') {
                echo json_encode([
                    'status' => 'success', 
                    'message' => 'Login successful.<br>Redirecting to Admin Menu...', 
                    'redirect_url' => 'newmenu.php'
                ]);
            } else {
                echo json_encode([
                    'status' => 'success', 
                    'message' => 'Login successful.<br>Redirecting...', 
                    'redirect_url' => 'usermenu.php'
                ]);
            }
            
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid password.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No user found with the given username.']);
    }

    $stmt->close();
    $con->close();
    exit; // Ensure no further PHP code is executed
}
?>
