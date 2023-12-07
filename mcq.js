let selectedAnswer = null;
let currentQuestionId;
let currentAttempt = 1;
let questionType;

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
// gotta refactor this laters
function attachImageListeners(){
    const images = document.querySelectorAll('.image-answer');
    images.forEach((img)=>{
        img.addEventListener('click', function(){
            images.forEach(image=>image.classList.remove('selected'));
            this.classList.add('selected');
            selectedAnswer = this.getAttribute('src');
            console.log(`Your selected image path: ${selectedAnswer}`);
        })
    })
}
attachImageListeners();
attachAnswerButtonListeners();

const submitBtn = document.querySelector("#submit-btn");
// const backBtn = document.querySelector("#back-btn");
// const skipBtn = document.querySelector("#skip-btn");
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
            body: JSON.stringify({answer: selectedAnswer, questionId: currentQuestionId, attempt: currentAttempt, questionType: questionType}),
            headers: {'content-type': 'application/json' }
        }).then(response => response.json())
        .then(data => {
            console.log(data);
            if (!data.endOfTest) {
                updateQuestion(data);
            } else {
                console.log('fin. Test ova!');
                displayEndOfTestMessage(data.score);
            }
        })
        .catch(error=>console.error('Mais non! Nous avons un probleme! Voila: ', error));
    } else{
        console.log("No answer selected. Cliquer un reponse");
    }
});

function updateQuestion(questionData) {

    currentQuestionId = questionData.nextQuestionId; 
    selectedAnswer = null;
    questionType = questionData.questionType;
    
    const questionText = document.querySelector('.question');
    questionText.textContent = questionData.questionText;

    const answersDiv = document.querySelector('.answers');
    const imageAnswersDiv = document.querySelector('.image-answers');
    if (answersDiv) {answersDiv.innerHTML = '';}
    if (imageAnswersDiv) {imageAnswersDiv.innerHTML = '';}
    console.log(questionData.questionType);
    if (questionData.questionType === 'roadsignstest') {
        questionData.options.forEach(imagePath => {
            const img = document.createElement('img');
            img.className = 'image-answer';
            img.src = imagePath;
            img.alt = "Road Sign Ontario";
            imageAnswersDiv.appendChild(img);
        });
        attachImageListeners();
    } else {
        questionData.options.forEach(option => {
            const button = document.createElement('button');
            button.className = 'answer';
            button.textContent = option;
            button.setAttribute('data-answer', option);
            answersDiv.appendChild(button);
        });
        attachAnswerButtonListeners();
    }
  
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

