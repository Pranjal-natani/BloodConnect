<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css/reset.css">
</head>
<body style="background-image:url('P1.png'); height: 700px; background-size: cover;">
    <div class="card-container">
        <div class="card">
            <div class="header">Forgot Password</div>
            <div class="content">
                <?php
                include('connection.php');
                date_default_timezone_set('Asia/Kolkata');
                mysqli_query($con, "SET time_zone = 'Asia/Kolkata'");
                $message = "";

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $token = $_POST['token'];
                    $password = trim($_POST['password']);
                    $confirm_password = trim($_POST['confirm_password']);

                    if ($password !== $confirm_password) {
                        $message = "Passwords do not match.";
                    } else {
                        $query = $con->prepare("SELECT * FROM user WHERE token = ? AND token_expiry > NOW()");
                        $query->bind_param("s", $token);
                        $query->execute();
                        $result = $query->get_result();

                        if ($result->num_rows === 1) {
                            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
                            $update = $con->prepare("UPDATE user SET password = ?, token = NULL, token_expiry = NULL WHERE token = ?");
                            $update->bind_param("ss", $hashed_password, $token);
                            $update->execute();
                            $message = "Password has been reset successfully.";
                        } else {
                            $message = "Invalid or expired token.";
                        }
                    }
                }
                ?>

                <form name="reset_password" method="POST">
                    <div class="input-field">
                        <input type="password" class="input" name="password" placeholder="New Password" required>
                    </div>
                    <div class="input-field">
                        <input type="password" class="input" name="confirm_password" placeholder="Confirm Password" required>
                    </div>
                    <div class="input-field">
                        <button class="btn btn-submit" type="submit">Reset Password</button>
                    </div>
                    <div class="c">
                    <button type="submit" onclick="window.location.href='index.php'" class="btn btn-submit">Back To Home</button>
                    </div>
                </form>
                <br>
                <br>
                <?php if (!empty($message)): ?>
                    <div class="message">
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
