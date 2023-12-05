<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/login.css"> -->
    <title>Log In</title>
</head>

<body class="login-body">
<?php include 'header.php'?> 
<main class="login-signup-container">
    <div class="login-signup-box">
        <div class="login-signup-logo-container">
            <img src="assets/images/logo.png" alt="Drive Canada Logo">
            <!-- <h1>Drive Canada</h1> -->
        </div>
        <h2>Log In</h2>
        <form class="login-signup-form" action="login-process.php" method="POST">
            <input name="username" type="text" placeholder="Username" required>
            <input name="password" type="password" placeholder="Enter Your Password" required>
            <div class="remember-forgot-links">
                <div class="remember-me">
                    <input id="rememberCheckbox" type="checkbox" name="rememberCheckbox">
                    <label for="rememberCheckbox">Remember Me</label>
                </div>
                <div>
                    <a href="forgot-password.php"> Forgot Password</a>
                </div>
            </div>
            <div class="login-signup-buttons">
            <button class="login-button" type="submit">Log In</button>
            <button class="signup-button" type="button" onclick="location.href ='signup.php'">Create Account</button>
            </div>
        </form>
    </div>
</main>
<?php include 'footer.php'?>
</body>

</html>