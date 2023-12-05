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
        <div class="question-number"><h1>Defensive Driving Simulator</h1></div>
        <div class="question">
            <h2>Simulator Instructions</h2>
            <p>Watch the video and click on the hazards on the screen</p>
            <button class="nav-button" id="start-btn">Start</button>    
        </div>
        <div id="video">
        <iframe src="https://player.vimeo.com/video/500440443?muted=1&amp;controls=0&amp;loop=0&amp;background=1&amp;app_id=122963" width="426" height="240" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" title="toronto1" data-ready="true"></iframe>
        </div>
    <!-- <nav class="test-navigation">
        <button class="nav-button" id="back-btn" onclick="location.href='practice-tests.php'">All Tests</button>
        <button class="nav-button" id="back-btn">Back</button>
        <button class="nav-button" id="skip-btn">Skip</button>
        <button class="nav-button" id="submit-btn">Submit</button>
    </nav> -->
    </div>
</main>
<?php include 'footer.php'?>
<script src="main.js"></script>
</body>
</html>