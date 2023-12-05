<?php session_start();


$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

include 'connect.php';


$stmt = $pdo->prepare("INSERT INTO `users` (`userId`, `email`, `username`, `password`) VALUES (NULL, '$email', '$username','$password')");
$stmt->execute();

if ($stmt->rowCount() > 0) {  
    $userId = $pdo->lastInsertId();
    $_SESSION["userId"] = $userId;     
    $_SESSION["username"] = $username;     
    $_SESSION["loggedIn"] = true;     
    header('Location: index.php');
}

?>




