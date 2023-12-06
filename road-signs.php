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
<main class="testpage-container">
    <div class="question-container">
        <div class="question-number">currentquestion#/total#ofquestions</div>
        <div class="question">question</div>
        <div class="answers image-answers">
            <button class="answer image-answer"><img src="assets/images/road-sign.png" alt="option 1"></button>
            <button class="answer image-answer"><img src="assets/images/road-sign.png" alt="option 2"></button>
        </div>
        <?php include 'navigation.php'?>
    </div>
</main>
<?php include 'footer.php'?>
</body>
</html>