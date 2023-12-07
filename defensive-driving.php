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
        <div id="video-container">
        <!-- video will be sourced from vimeo: https://vimeo.com/500440443 -->
            <video id="defensive-video" src="assets/videos/defensivedriving.mp4" style="width:100%;" controls></video>
            <div id="hazard-1" style="position:absolute; bottom:0; left:0; right:0; background:red; display:none;"></div>
            <div id="hazard-2"></div>
            <div id="hazard-3"></div>
            <div id="hazard-4"></div>
            <div id="hazard-5"></div>
            <div id="feedback"></div>
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
<script src="interactive-video.js"></script>
</body>
</html>