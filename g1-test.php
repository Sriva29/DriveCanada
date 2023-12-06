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
                <button class="answer" data-answer="<?= htmlspecialchars($option)?>"><?= htmlspecialchars($option)?></button>
            <?php endforeach;?>
        </div>
        <?php include 'navigation.php'?>
    </div>
</main>
<?php include 'footer.php'?>
<script src="main.js"></script>
</body>
</html>