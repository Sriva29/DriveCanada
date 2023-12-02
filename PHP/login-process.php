<?php session_start();
$userName = $_POST["userName"];
$passWord = $_POST["passWord"];

$dsn = "mysql:host=localhost;dbname=drivecanada;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

$pdo = new PDO($dsn, $dbusername, $dbpassword);
$stmt = $pdo->prepare("SELECT `userId`, `userName` 
	FROM `users` 
	WHERE `userName` = '$userName' AND `passWord` = '$passWord';");
$stmt->execute();

if ($row = $stmt->fetch()) {
    $_SESSION["userId"] = $row['userId'];
	$_SESSION["userName"] = $row['userName'];
	$_SESSION["loggedIn"] = true;
    // Check the admin account, if the username is "mahasri" and the password is "canada"
    if ($userName === "mahasri" && $passWord === "canada") {

    }

    } elseif ($userName === $userName && $passWord === $passWord) {

    }