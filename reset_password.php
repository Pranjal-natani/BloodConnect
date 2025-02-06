<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="css/reset.css">
</head>
<body style="background-image:url('P1.png'); height: 700px; background-size: cover;">
    <div class="card-container">
        <div class="card">
            <div class="header">Reset Password</div>
            <div class="content">
                <form name="reset_password" action="process_reset_password.php" method="POST">
                    <input type="hidden" name="token" value="<?php echo htmlspecialchars($_GET['token']); ?>">
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
                
            </div>
        </div>
    </div>
</body>
</html>
