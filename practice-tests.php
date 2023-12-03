<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Practice Tests</title>
</head>
<body>
<?php include 'header.php'?>
<main class="practice-test-container">
    <h1>Get Ready for your license with these practice questions</h1>
    <div class="test-card-container">
        <div class="test-card" onclick="location.href='g1-test.php'">
            <img src="assets/images/g1-test.png" alt="Image of a Car on the Road">
            <h2>G1 Practice Test</h2>
            <p>10 Questions</p>
        </div>
        <div class="test-card" onclick="location.href='road-signs.php'">
            <img src="assets/images/road-sign.png" alt="Image of a Car on the Road">
            <h2>Road Signs Test</h2>
            <p>10 Questions</p>
        </div>
        <div class="test-card" onclick="location.href='defensive-driving.php'">
            <img src="assets/images/defensive-driving.png" alt="Image of a Car on the Road">
            <h2>Defensive Driver Simulator</h2>
            <p>10 Questions</p>
        </div>
    </div>
</main>
<?php include 'footer.php'?>
</body>
</html>