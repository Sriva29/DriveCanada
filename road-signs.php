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
$stmt = $pdo->prepare("SELECT * FROM `drag_drop_questions` ORDER BY `questionId` ASC LIMIT 1");
if($stmt->execute()){
    $QA = $stmt->fetch();
    if($QA){
        // need to shuffle answers
        $descriptions = [$QA["correctDescription"], $QA["otherDescription"]];
        shuffle($descriptions);
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
        <div class="question-number"><span id="current-question-number"></span>/10</div>
        <div class="question"><?=htmlspecialchars($questionData['questionText'])?></div>
        <div class="drag-drop-container">
            <img src="<?= htmlspecialchars($questionData['imagePath'])?>" id="draggable-sign" draggable="true" alt="Road Sign Ontario">
        </div>
        <div class="description-boxes">
            <?php
                foreach($descriptions as $description){
                    $isCorrect = ($desc === $questionData['correctDescription']) ? 'true' : 'false';
                    echo '<div class="description-box" data-correct="' . $isCorrect . '">' . htmlspecialchars($desc) . '</div>';
                }
            ?>
        </div>
        <?php include 'navigation.php'?>
    </div>
</main>
<?php include 'footer.php'?>
<script src="mcq.js"></script>
</body>
</html>