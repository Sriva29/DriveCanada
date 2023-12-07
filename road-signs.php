<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Road Signs</title>
</head>
<body>
<?php include 'header.php'?>
<?php include 'connect.php'?>
<?php 
$stmt = $pdo->prepare("SELECT * FROM `roadsignstest` ORDER BY `questionId` ASC LIMIT 1");
if($stmt->execute()){
    $QA = $stmt->fetch();
    if($QA){
        // need to shuffle answers
        $images = [$QA["correctImagePath"], $QA["incorrectImagePath"]];
        shuffle($images);
    }
    else{
        echo "You got a problem, mate. The fetch ain't workin'";
    }
} else{
    echo "Now that's interesting. . . No statement for you 🖖";
}
?>
<main class="testpage-container">
    <div class="question-container">
        <div class="question-number"><span id="current-question-number"></span>/5</div>
        <div class="question"><?=htmlspecialchars($QA['question'])?></div>
        <div class="image-answers">
            <?php foreach($images as $image):?>
                <img class="image-answer" src="<?= htmlspecialchars($image)?>" alt="Road Sign Ontario">
            <?php endforeach;?>
        </div>
        <?php include 'navigation.php'?>
    </div>
</main>
<?php include 'footer.php'?>
<script src="mcq.js"></script>
<script> currentQuestionId = <?=$QA["questionId"]?>; 
questionType = "roadsignstest" </script>
</body>
</html>