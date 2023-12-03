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
        <h2>Forgot Password</h2>
        <form class="login-signup-form" action="forgot-password-process.php" method="POST">
            <input name="email" type="email" placeholder="Enter your recovery email" required>
            <div class="login-signup-buttons">
                <button class="login-button" type="submit">Send Recovery Link</button>
                <button class="signup-button" type="button" onclick="history.back()">Go Back</button>
            </div>
        </form>
    </div>
</main>
<?php include 'footer.php'?>
</body>

</html>