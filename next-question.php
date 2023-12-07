<?php
include 'connect.php';
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

// We need to decode the data we get from JSON
$input = json_decode(file_get_contents('php://input'), true);

// Which question and what answer and who and which attempt?
$currentQuestionId = $input['questionId'] ?? null;
$selectedAnswer = $input['answer'] ?? null;
$userId = $_SESSION['userId'] ?? null;
$attempt = $input["attempt"] ?? null;

if (is_null($currentQuestionId) || is_null($selectedAnswer) || is_null($userId) || is_null($attempt)) {
    echo json_encode(['error' => 'Missing required data']);
    exit;
}

// Gettin the correct answer for the current question.
$correctAnswerStmt = $pdo->prepare("SELECT `correctAnswer` FROM `g1test` WHERE `questionId` = ?");
$correctAnswerStmt->execute([$currentQuestionId]);
$correctAnswerResult = $correctAnswerStmt->fetch();
$isCorrect = ($correctAnswerResult && $selectedAnswer === $correctAnswerResult['correctAnswer']);

// Update user-response with response (obvi)
$insertStmt = $pdo->prepare("INSERT INTO `user-responses` (userId, questionId, response, isCorrect, attempt) VALUES (?, ?, ?, ?, ?)");
$insertStmt->execute([$userId, $currentQuestionId, $selectedAnswer, $isCorrect, $attempt]);

// Oh garcon, le prochain question, s'il vous plait. . .
$stmt = $pdo->prepare("SELECT * FROM `g1test` WHERE `questionId` > ? ORDER BY `questionId` ASC LIMIT 1");
$stmt->execute([$currentQuestionId]);

if($nextQuestion = $stmt->fetch()) {
    // Options shuffle from g1-test
    $options = [$nextQuestion["option1"], $nextQuestion["option2"], $nextQuestion["option3"], $nextQuestion["correctAnswer"]];
    shuffle($options);

    // Next question and options echo
    echo json_encode([
        'nextQuestionId' => $nextQuestion['questionId'],
        'questionText' => htmlspecialchars($nextQuestion['questions']),
        'options' => array_map('htmlspecialchars', $options)
    ]);
} else {
    // Score calc for current question
    $scoreStmt = $pdo->prepare("SELECT COUNT(*) AS totalQuestions, SUM(isCorrect) AS correctAnswers FROM `user-responses` WHERE userId = ? AND attempt = ?");
    $scoreStmt->execute([$userId, $attempt]);
    $scoreResult = $scoreStmt->fetch(PDO::FETCH_ASSOC); 

    if ($scoreResult) {
        $totalQuestions = $scoreResult['totalQuestions'];
        $correctAnswers = $scoreResult['correctAnswers'];
        $scorePercent = ($totalQuestions > 0) ? ($correctAnswers / $totalQuestions) * 100 : 0;

        echo json_encode([
            'endOfTest' => true,
            'score' => $scorePercent
        ]);
    } else {
        echo json_encode(['error' => 'Score calculation failed']);
    }
}

?>