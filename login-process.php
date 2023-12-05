<?php session_start();
include("connect.php");

// $email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

$stmt = $pdo->prepare("SELECT `userId`, `username` 
	FROM `users` 
	WHERE `username` = '$username' AND `password` = '$password';");
$stmt->execute();

if ($row = $stmt->fetch()) {
    $_SESSION["userId"] = $row['userId'];
	$_SESSION["username"] = $row['username'];
	$_SESSION["loggedIn"] = true;
    
    if ($username === $username && $password === $password)  {
        header('location:index.php');?>
    <?php      
    }   



    }
    ?>