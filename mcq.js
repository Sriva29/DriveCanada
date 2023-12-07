let selectedAnswer = null;
let currentQuestionId;
let currentAttempt = 1;

function attachAnswerButtonListeners(){
    const answers = document.querySelectorAll(".answer");
    answers.forEach((button)=>{
        button.addEventListener("click", function(){
            //remove select from previous button
            answers.forEach(btn=>btn.classList.remove('selected'));
            // make new button selected
            this.classList.add('selected');
            // git the data from the selected button
            selectedAnswer = this.getAttribute('data-answer');
            console.log(`Wow. You selected "${selectedAnswer}"?! Are you sureeeee?`);
        });
    });
}

attachAnswerButtonListeners();

const submitBtn = document.querySelector("#submit-btn");
const backBtn = document.querySelector("#back-btn");
const skipBtn = document.querySelector("#skip-btn");
const allTestsBtn = document.querySelector("#all-tests-btn");
const question = document.querySelector(".question");

let currentQuestionNumber = document.querySelector("#current-question-number");
currentQuestionNumber.innerHTML = 1;


// All Tests Interaction
allTestsBtn.addEventListener("click", function(){
    location.href='practice-tests.php';
});

// Submit interaction - ajax or ajaf? -> AJAF!

submitBtn.addEventListener("click", function(){
    currentQuestionNumber.innerHTML++;
    if(selectedAnswer){
        fetch('next-question.php', {
            method: 'POST',
            body: JSON.stringify({answer: selectedAnswer, questionId: currentQuestionId, attempt: currentAttempt}),
            headers: {'content-type': 'application/json' }
        }).then(response => response.json())
        .then(data => {
            console.log(data);
            if (!data.endOfTest) {
                updateQuestion(data);
                currentQuestionId = data.nextQuestionId;
            } else {
                console.log('fin. Test ova!');
                displayEndOfTestMessage(data.score);
            }
        })
        .catch(error=>console.log('Mais non! Nous avons un probleme! Voila: ', error));
    } else{
        console.log("No answer selected. Cliquer un reponse");
    }
});

function updateQuestion(questionData) {
    const questionText = document.querySelector('.question');
    const answersDiv = document.querySelector('.answers');

    questionText.textContent = questionData.questionText;
    answersDiv.innerHTML = '';

    questionData.options.forEach(option => {
        const button = document.createElement('button');
        button.className = 'answer';
        button.textContent = option;
        button.setAttribute('data-answer', option);
        answersDiv.appendChild(button);
    });
    attachAnswerButtonListeners();  
}


function displayEndOfTestMessage(score){
    const questionContainer = document.querySelector('.question-container');
    const scoreMessage = score >= 50 ?
    `Great job! You scored ${score.toFixed(2)}%`:
    `You didn't quite answer all the questions correctly. Your score is ${score.toFixed(2)}%. Consider retrying.`;

    questionContainer.innerHTML = 
    `<div class="question">
        ${scoreMessage}
    </div>
    <div class="answers">
        <button class="nav-button" onclick="location.href='practice-tests.php'">All Tests</button>
        <button class="nav-button" onclick="restartTest()">Retry</button>
    </div>
    `;
}

function restartTest(){
    currentAttempt++;
    location.reload();
    currentQuestionNumber.innerHTML = 1;
}