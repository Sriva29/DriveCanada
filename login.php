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
        <img class="login-signup-logo" src="assets/images/logo.png" alt="Drive Canada Logo">
        <form action="login-process.php" method="POST">
            <label class="login-label">Log In</label>
            <input class="login-input" name="username" type="text" placeholder="email" required>
            <input class="login-input" name="password" type="text" placeholder="********" required>
            <div class="remember-forgot-links">
                <div>
                    <input type="checkbox" name="rememberCheckbox">
                    <label class="rememberme-label" for="rememberCheckbox">Remember Me</label>
                </div>
                <div>
                    <a href="reset-password.php"> Forgot Password</a>
                </div>
            </div>
            <button class="login-button" type="submit">Log In</button>
        </form>
        <a class="signup-button" href="sign-up.php"> Create Account</a>
    </div>
</main>
<?php include 'footer.php'?>
</body>

</html>