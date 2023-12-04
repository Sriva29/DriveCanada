
<?php
$email = $_POST["email"];
$userName = $_POST["userName"];
$passWord = $_POST["passWord"];

$dsn = "mysql:host=localhost;dbname=drivecanada;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);