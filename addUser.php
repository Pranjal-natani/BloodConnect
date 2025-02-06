<?php
session_start();
include 'connection.php';
$_SESSION["tab"] = "Add User";

if ($_SESSION["login"] != 1) {
    echo '<h2 style="color:red;">Authentication Error!!!</h2>';
} else {
    $super_pwd = $_POST['super_pwd'];
    $usr_name = $_POST['usr_name'];
    $usr_pwd = $_POST['usr_pwd'];
    $usr_cnfrm_pwd = $_POST['usr_cnfrm_pwd'];
    $usr_email = $_POST['usr_email']; // New email input
    $err = FALSE;

    // Check if passwords match
    if ($usr_pwd != $usr_cnfrm_pwd) {
        echo "Passwords do not match<br>";
        $err = TRUE;
    }

    // Check if the provided admin password is correct
    if (!$err) {
        $sql = "SELECT * FROM User WHERE role = 'admin'";
        $result = mysqli_query($con, $sql);
        $adminData = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if ($adminData && password_verify($super_pwd, $adminData['password'])) {
            // Admin password verified successfully
        } else {
            echo "
            <div id='custom-alert' style='display:none; position:fixed; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.5); z-index:1000;'>
                <div style='position:relative; margin: 15% auto; padding:20px; width:300px; font-size:20px; font-weight:bold; background-color:#c8cfcf; border:2px solid black; text-align:center; border-radius:5px;'>
                    <h3 style='float:left; color:red; margin-top: 1px; text-align: center;'>BloodConnect</h3>
                    <br>
                    <hr style='margin-top:30px;'>
                    <p id='custom-alert-message'>Admin password verification failed.</p>
                    <button id='alert-ok-btn' style='padding:10px 20px; background-color:#DD0202; color:white; font-weight:bold; cursor:pointer;' onclick='redirectToAddUser()'>OK</button>
                </div>
            </div>
            <script>
                document.getElementById('custom-alert').style.display = 'block';

                function redirectToAddUser() {
                    window.location.href = 'Add User.php';
                }
            </script>";
            $err = TRUE;
        }
    }

    // Check if the username is already taken
    if (!$err) {
        $sql = "SELECT * FROM User WHERE username = '$usr_name'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if ($count != 0) {
            echo "Username not available<br>";
            $err = TRUE;
        }
    }

    // Insert the new user into the database with hashed password, token, and expiry
    if (!$err) {
        try {
            $hashedPwd = password_hash($usr_pwd, PASSWORD_DEFAULT);
            $token = bin2hex(random_bytes(16)); // Generate secure token
            $tokenExpiry = date("Y-m-d H:i:s", strtotime('+10 hour')); // Set token expiry
            
            $sql = "INSERT INTO User (username, password, email, token, token_expiry) VALUES ('$usr_name', '$hashedPwd', '$usr_email', '$token', '$tokenExpiry')";
            if ($con->query($sql) === TRUE) {
                echo "
                <div id='custom-alert' style='display:none; position:fixed; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.5); z-index:1000;'>
                    <div style='position:relative; margin: 15% auto; padding:20px; width:300px; font-size:20px; font-weight:bold; background-color:#c8cfcf; border:2px solid black; text-align:center; border-radius:5px;'>
                        <h3 style='float:left; color:red; margin-top: 1px; text-align: center;'>BloodConnect</h3>
                        <br>
                        <hr style='margin-top:30px;'>
                        <p id='custom-alert-message'>New user created successfully.</p>
                        <button id='alert-ok-btn' style='padding:10px 20px; background-color:#DD0202; color:white; font-weight:bold; cursor:pointer;' onclick='redirectToAddUser()'>OK</button>
                    </div>
                </div>
                <script>
                    document.getElementById('custom-alert').style.display = 'block';

                    function redirectToAddUser() {
                        window.location.href = 'Add User.php';
                    }
                </script>";
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        } catch (Exception $e) {
            error_log("Token Generation Error: " . $e->getMessage(), 3, 'error.log');
            echo "<script>
                alert('Error creating token. Please try again.');
                window.location.href = 'Add User.php';
            </script>";
        }
    }

    include_once('footer.php');
}
?>
