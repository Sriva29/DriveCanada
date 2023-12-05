<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>
<header class="header">
    <nav class="navigation">
        <div class="header-left">
            <div class="logo-title-container">
                <a href="index.php"><img class="logo" src="assets/images/logo.png" alt="Drive Canada Logo"></a>
                <a href="index.php" class="title">Drive Canada</a>
            </div>
            <ul class="navigation-list left">
                <!-- <li class="navigation-list-item"><a href="learner-stories.php">Learner Stories</a></li> -->
                <!-- <li class="navigation-list-item"><a href="practice-tests.php">Practice Tests</a></li> -->
                <!-- <li class="navigation-list-item"><a href="document-checklist.php">Document Checklist</a></li> -->
            </ul>
        </div>
        <ul class="navigation-list right">
        <?php
        if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true){
            echo($_SESSION["username"]);
                echo`<li class="navigation-list-item"> Hello, {$_SESSION["username"]}</li>`;
                echo '<li class="navigation-list-item"><a href="logout.php">Log out</a></li>';       
            } else {
                echo '<li class="navigation-list-item"><a href="login.php">Login</a></li>';
                echo '<li class="navigation-list-item"><a href="signup.php">Sign Up</a></li>';
            }?>
            <!-- <li class="navigation-list-item"><a href="login.php">Login</a></li>
            <li class="navigation-list-item"><a href="signup.php">Sign Up</a></li> -->
        </ul>
    </nav>
</header>