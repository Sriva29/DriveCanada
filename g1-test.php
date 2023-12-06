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
<?php include 'connect.php'?>

<?php
$stmt = $pdo->prepare("SELECT * FROM `g1Test` ORDER BY `questionId` ASC LIMIT 1");  
if($stmt->execute()){
    $QA = $stmt->fetch();
    if($QA){
        // need to shuffle answers
        $options = [$QA["option1"], $QA["option2"], $QA["option3"], $QA["correctAnswer"]];
        shuffle($options);
    }
    else{
        echo "You got a problem, mate. The fetch ain't workin'";
    }
} else{
    echo "Now that's interesting. . . No statement for you 🖖";
}
?>
<script> let currentQuestionId = <?=$QA["questionId"]?> </script>


<main class="testpage-container">
    <div class="question-container">
        <div class="question-number">currentquestion#/total#ofquestions</div>
        <div class="question"><?=htmlspecialchars($QA["questions"])?></div>
        <div class="answers">
            <?php foreach($options as $option):?>
                <button class="answer"><?= htmlspecialchars($option)?></button>
            <?php endforeach;?>
            <!-- <button class="answer">$QA[""]</button>
            <button class="answer">answer2</button>
            <button class="answer">answer3</button>
            <button class="answer">answer4</button> -->
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