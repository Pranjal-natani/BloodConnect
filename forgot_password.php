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
                <form name="forgot_password" action="process_forgot_password.php" method="POST">
                    <div class="input-field">
                        <input type="text" class="input" name="username" placeholder="Enter your username" required>
                    </div>
                    <div class="input-field">
                        <button class="btn btn-submit" type="submit">Next</button>
                    </div>
                    <div class="c">
                    <button type="submit" onclick="window.location.href='index.php'" class="btn btn-submit">Back To Home</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
