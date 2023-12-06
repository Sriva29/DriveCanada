<?php


$contactName = $_POST["contactName"];
$contactEmail = $_POST["contactEmail"];
$contactMessage = $_POST["contactMessage"];

include("connect.php");

$stmt = $pdo->prepare("INSERT INTO `contacts` (`contactId`, `contactName`, `contactEmail`, `contactMessage`)
VALUES (NULL, '$contactName', '$contactEmail', '$contactMessage');");

if ($stmt->execute()) { ?>
    <h1>Your message has been sent Successfully</h1>
    <br><br>
    <button><a href="contact-us.php">Back</a></button>
    <?php }  
    ?>
    