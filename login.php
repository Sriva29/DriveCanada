<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/login.css"> -->
    <title>Log In</title>
</head>

<body>
    <?php include 'header.php' ?>
    <div class="container">
        <div class="main">
            <div id="fo">
                <img class="fo1" width="70" src="assets/images/logo.png" alt="logo">
                <form action="process-contact.php" method="POST">
                    <label class="fo1">Log In</label>
                    <input id="us" class="fo1" name="userName" type="text" placeholder="email" required>
                    <input id="ps" class="fo1" name="passWord" type="text"
                        placeholder="********" required>
                    <div class="rp">
                        <div>
                            <input type="checkbox">
                            <label class="fr" for="rememberCheckbox">Remember Me</label>
                        </div>
                        <div>
                            <a class="fr" href="reset-password.php"> Forgot Password</a>
                        </div>
                    </div>
                    <button id="bu" class="fo1" type="button" onclick="href='index.php'">Log In</button>
                    <a id="ca" class="fo1" href="sign-up.php"> Create Account</a>
                </form>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>