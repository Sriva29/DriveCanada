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
        <div class="answers">
            <button class="answer">answer1</button>
            <button class="answer">answer2</button>
            <button class="answer">answer3</button>
            <button class="answer">answer4</button>
        </div>
    <nav class="test-navigation">
        <button class="nav-button" id="back-btn" onclick="location.href='practice-tests.php'">All Tests</button>
        <button class="nav-button" id="back-btn">Back</button>
        <button class="nav-button" id="skip-btn">Skip</button>
        <button class="nav-button" id="submit-btn">Submit</button>
    </nav>
    </div>
</main>
<?php include 'footer.php'?>
</body>
</html>