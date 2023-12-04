<?php

include 'connect.php';

//prepare
$stmt = $pdo->prepare("INSERT INTO `users` (`userId`, `email`, `userName`, `passWord`) 
VALUES (NULL, '$email', '$userName', '$passWord');");

//execute
if ($stmt->execute()) { ?>
<h1>Done Successfully</h1>
<?php }  
?>