<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Log In</title>
</head>
<body>
<div class="container">


                <div class="topnav">

                    <a class="topnav1" href="learner-stories.html">Learner Stories</a>
                    <a class="topnav1" href="practice-tests.html">Driver Tests</a>
                    <a class="topnav1" href="document-checklist.html">Document Checklist</a>
                    <a class="topnav3" href="login.html">Log in</a>
                    <a class="topnav3" href="sign-up.html">Sign Up</a>
                    <a id="dc" href="home.html">Drive Canada</a>
                    <!-- <div class="topnav2"> -->
                        <img id="lo"  width="70" src="assets/images/logo.png" alt="logo">
                    <!-- </div> -->
                
                </div>

        <div class="main">

            <div id="fo">

                    <img class="fo1" width="70" src="assets/images/logo.png" alt="logo">

                    <form action="process-contact.php" method="POST">
                        <label class="fo1">Log In</label>
                        <input id="us" class="fo1" name="userName" type="text" placeholder="email" required>
                        <input id="ps" class="fo1" name="passWord" type="text" placeholder="********                  Password" required>
                
                        <div class="rp">

                                    <div>
                                    <input type="checkbox">
                                <label class="fr" for="rememberCheckbox">Remember Me</label>
                                    </div>

                                    <div>
                                <a class="fr" href="Reset Password.html"> Forgot Password</a>
                                    </div>
                    
                                    </div>

                                <button id="bu" class="fo1" type="button" onclick= "href='Home.html'">Log In</button>
                                <a id="ca" class="fo1" href="Sign Up.html"> Create Account</a>
                    </form>
            </div>
        </div>









        <div class="footer">


            <div class="footer1">
                <img width="70" src="assets/images/logo.png" alt="logo">
                <p id="p1">Drive Canada</p>
                <p id="p2">2023-2024</p>
                <a id="pt" href="404.html">Privacy-Terms</a>
            </div>

            <a id="au" href="404.html">About Us</a>
            <a id="co" href="404.html">Company</a>

        </div>




</div>









</body>
</html>