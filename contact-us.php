<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Contact Us</title>
</head>

<body>
<?php include 'header.php'?> 
<main class="login-signup-container">
    <div class="login-signup-box">
        <div class="login-signup-logo-container">
            <img src="assets/images/logo.png" alt="Drive Canada Logo">
            <!-- <h1>Drive Canada</h1> -->
        </div>
        <h2>Contact Us</h2>
        <form class="login-signup-form" action="contact-process.php" method="POST">
            <input name="name" type="text" placeholder="Your name" required>
            <input name="email" type="email" placeholder="Your email" required>
            <textarea name="message" placeholder="Let us know how we can help you" required> </textarea>
            <!-- <div class="remember-forgot-links">
                <div class="remember-me">
                    <input id="rememberCheckbox" type="checkbox" name="rememberCheckbox">
                    <label for="rememberCheckbox">Remember Me</label>
                </div>
                <div>
                    <a href="reset-password.php"> Forgot Password</a>
                </div>
            </div> -->
            <div class="login-signup-buttons">
                <button class="login-button" type="submit">Send Message</button>
                <!-- <button class="signup-button" type="button" onclick="location.href ='signup.php'">Create Account</button> -->
            </div>
        </form>
    </div>
</main>
<?php include 'footer.php'?>
</body>

</html>