<!DOCTYPE html>
<html lang="en">
<head>
    <title>BloodConnect</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="icon" sizes="16x16" type="image/x-icon" href="faviconnn.ico" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="video-container">
        <video autoplay muted loop>
            <source src="vecteezy_animations-about-hospitals-and-diseases_29094537.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="overlayy"> 
            <div class="title">
                <center>
                    <img src="res/images/Blood__Connect.png" height="130" width="300" align="top">
                    <h1>BloodConnect</h1>
                </center>
            </div>
            <div class="main-wrapper">
                <div class="card-container">
                    <div class="card">
                        <div class="login-form">
                            <div class="header">Log in</div>
                            <div class="content">
                                <form name="f1" action="login.php" method="POST">
                                    <div class="input-field">
                                        <input type="text" class="input" name="user" placeholder="Username" required>
                                    </div>
                                    <div class="input-field">
                                        <input type="password" class="input" name="pass" placeholder="Password" required>
                                    </div>
                                    <div class="input-field">
                                        <button class="btn btn-submit" type="submit" id="btn" name="submit">Log in</button>
                                    </div>
                                </form>
                            </div>
                            <div class="footer">
                                <a href="forgot_password.php" style="color:rgb(0, 0, 0); font-weight: bold;">Forgot Password?</a>
                            
                                <!-- <button class="btn btn-rotate" id="btn-signup">Sign up</button> -->
                            </div>
                        </div>

                        <!-- <div class="signup-form">
                            <div class="header">Sign up</div>
                            <div class="content">
                                <form name="s1">
                                    <div class="input-field">
                                        <input type="text" class="input" name="user" placeholder="Username" required>
                                    </div>
                                    <div class="input-field">
                                        <input type="email" class="input" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="input-field group">
                                        <input type="password" class="input" name="pass" placeholder="Password" required>
                                        <span class="see-password">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0z" fill="none"/>
                                                <path fill="#fff" d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="input-field">
                                        <button class="btn btn-submit" type="submit">Get started</button>
                                    </div> 
                                </form> -->
                            </div>
                            <!-- <div class="footer">
                                <button class="btn btn-rotate" id="btn-login">I have an account</button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="demo.js"></script>
        <!-- Custom Alert Modal -->
        <div id="custom-alert" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.5); z-index:1000;">
            <div style="position:relative; margin: 20% auto; padding:20px; width:300px; font-size:20px; font-weight:bold; background-color:#c8cfcf; border:2px solid black; text-align:center; border-radius:5px;">
                <h3 style="float:left; color:red;">BloodConnect</h3>
                <hr style="margin-top:30px;">
                <p id="custom-alert-message">Signup Successful !</p>
                <button id="alert-ok-btn" style="padding:10px 20px; background-color:#e74c3c; color:white; font-weight:bold;margin-top:14px; cursor:pointer;">OK</button>
            </div>
        </div>

        <script>

            window.onload = function() {
        document.forms['f1'].reset();
    };
            // function showCustomAlert(message) {
            //     document.getElementById('custom-alert-message').innerText = message;
            //     document.getElementById('custom-alert').style.display = 'block';
            //     document.getElementById('alert-ok-btn').onclick = function () {
            //         document.getElementById('custom-alert').style.display = 'none';
            //     };
            // }

            // $(document).ready(function () {
            //     $('form[name="s1"]').on('submit', function (event) {
            //         event.preventDefault();

            //         const formData = $(this).serialize();

            //         $.ajax({
            //             type: 'POST',
            //             url: 'signup.php',
            //             data: formData,
            //             dataType: 'json',
            //             success: function (response) {
            //                 if (response.status === 'success') {
            //                     showCustomAlert(response.message);
            //                 } else {
            //                     showCustomAlert('Error: ' + response.message);
            //                 }
            //             },
            //             error: function (xhr) {
            //                 showCustomAlert('An error occurred: ' + xhr.responseText);
            //             }
            //         });
            //     });
            // });
        
        // Custom alert function
        function showCustomAlert(message, redirectUrl = null) {
    // Display the custom alert box with HTML rendered
    document.getElementById('custom-alert-message').innerHTML = message; // Use innerHTML instead of innerText
    document.getElementById('custom-alert').style.display = 'block';

    // Close the alert box and redirect (if redirectUrl is provided)
    document.getElementById('alert-ok-btn').onclick = function () {
        document.getElementById('custom-alert').style.display = 'none';
        if (redirectUrl) {
            window.location.href = redirectUrl; // Redirect to the specified URL
        }
    };

    // Automatically redirect after 2 seconds (if redirectUrl is provided)
    if (redirectUrl) {
        setTimeout(function () {
            window.location.href = redirectUrl;
        }, 1000);
    }
}


$(document).ready(function () {
    $('form[name="f1"]').on('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        const formData = $(this).serialize(); // Serialize form data

        $.ajax({
            type: 'POST',
            url: 'login.php',
            data: formData,
            dataType: 'json',
            success: function (response) {
                if (response.status === 'success') {
                    // Show success alert and auto-redirect
                    showCustomAlert(response.message, response.redirect_url);
                } else {
                    // Show error alert
                    showCustomAlert('Error: ' + response.message);
                }
            },
            error: function (xhr) {
                // Handle AJAX error
                showCustomAlert('An error occurred: ' + xhr.responseText);
            }
        });
    });
});

        </script>
    </div>
</body>
</html>
