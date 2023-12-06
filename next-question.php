<?php 
include 'connect.php';

$input =  json_decode(file_get_contents('php://input'), true);

$currentQuestionId = $input['questionId'];
$selectedAnswer = $input['answer'];

$stmt = $pdo->prepare("SELECT * FROM `g1test` WHERE `questionId` > ORDER BY `questionId` ASC LIMIT 1");
$stmt->execute([$currentQuestionId]);

if($nextQuestion = $stmt->fetch()){
    // Shuffle options for the next question
    $options = [$nextQuestion["option1"], $nextQuestion["option2"], $nextQuestion["option3"], $nextQuestion["correctAnswer"]];
    shuffle($options);

    // Return the next question and options as JSON
    echo json_encode([
        'nextQuestionId' => $nextQuestion['questionId'],
        'questionText' => htmlspecialchars($nextQuestion['questions']),
        'options' => array_map('htmlspecialchars', $options)
    ]);
} else {
    // No more questions
    echo json_encode(['endOfTest' => true]);
}
?>
