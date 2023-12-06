const answers = document.querySelectorAll(".answer");
let selectedAnswer = null;
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


const submitBtn = document.querySelector("#submit-btn");
const backBtn = document.querySelector("#back-btn");
const skipBtn = document.querySelector("#skip-btn");
const allTestsBtn = document.querySelector("#all-tests-btn");


// All Tests Interaction
allTestsBtn.addEventListener("click", function(){
    location.href='practice-tests.php';
});




// Submit interaction - ajax or ajaf? -> AJAF!

submitBtn.addEventListener("click", function(){
    if(selectedAnswer){
        fetch('next-question.php', {
            method: 'POST',
            body: JSON.stringify({answer: selectedAnswer, questionId: currentQuestionId}),
            headers: {'content-type': 'application/json' }
        }).then(response => response.json())
        .then(data => {
            selectedAnswer = null;
            currentQuestionId = data.nextQuestionId;
            updateQuestion(data.nextQuestionId);
        })
        .catch(error=>console.log('Mais non! Nous avons un probleme! Voila: ', error));
    } else{
        console.log("No answer selected. Cliquer un reponse");
    }
});

function updateQuestion(questionData) {
    if (questionData.endOfTest) {
        // Handle the end of the test, perhaps redirect or show a message
        console.log('End of the test');
    } else {
        // Update the question text
        document.querySelector('.question').textContent = questionData.questionText;

        // Update the options
        const answersDiv = document.querySelector('.answers');
        answersDiv.innerHTML = ''; // Clear existing options

        questionData.options.forEach(option => {
            const button = document.createElement('button');
            button.className = 'answer';
            button.textContent = option;
            button.setAttribute('data-answer', option);
            button.addEventListener('click', function() {
                selectedAnswer = this.getAttribute('data-answer');
            });
            answersDiv.appendChild(button);
        });

        // Update currentQuestionId for the next submission
        currentQuestionId = questionData.nextQuestionId;
    }
}


// let selectedAnswer = null;

// answers.forEach(button=>{
//     button.addEventListener
// })

// submitBtn.addEventListener('click', function(){
//     fetch('next-question.php', {
//         method
//     })
// })


// const imageAnswers = document.querySelectorAll(".image-answer");

// imageAnswers.forEach((button)=>{
//     button.addEventListener("click", function(){
//         document.querySelectorAll('image-answer').forEach(btn =>btn.classList.remove('selected'));
//         this.classList.add('selected');
//     });
// });


//Video question

// const videoStartBtn = document.querySelector("#start-btn");
// videoStartBtn.addEventListener("click", function(){
//     const video = document.querySelector("#video");
//     //video.innerHTML = '<div style="padding:56.25% 0 0 0;position:relative;"><iframe id="defensive-video" src="https://player.vimeo.com/video/500440443?h=38b7dd1ff8&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>';
//     video.style.display = 'block';
//     const videoQuestion = document.querySelector(".question");
//     videoQuestion.style.display = 'none';
//     makeInteractive();
// });

// function makeInteractive(){
//     const defensiveVideo = document.querySelector("#defensive-video");
//     defensiveVideo.addEventListener('click', function(event){
//         //pause video on click (disable pausing with spacebar)
//         const vimeo = new Vimeo.Player(defensiveVideo);
//         //then check coordinates of where in the video user clicked

//         //store time

//         //check against database (or local) if coordinates + time is correct or wrong
        
//         // give instant feedback (div as overlay on top left corner of the 
//         // video with feedback text)

//         //Show resume button (also listen for spacebar click now)

//     })
// }

// document.addEventListener('DOMContentLoaded', function() {
//     const videoElement = document.getElementById('defensive-video');
//     const hazardDiv = document.getElementById('hazard-1');
//     const feedbackDiv = document.getElementById('feedback');

//     videoElement.addEventListener('click', function() {
//         // Toggle play/pause
//         if (videoElement.paused) {
//             videoElement.play();
//             feedbackDiv.style.display = 'none';
//         } else {
//             videoElement.pause();
//             feedbackDiv.style.display = 'block';
//             checkHazard(videoElement.currentTime);
//         }
//     });

//     hazardDiv.addEventListener('click', function() {
//         feedbackDiv.innerHTML = "Well done! You spotted the pedestrian crossing";
//     });

//     videoElement.addEventListener('timeupdate', function() {
//         const currentTime = videoElement.currentTime;
//         if (currentTime >= 4 && currentTime <= 8) {
//             hazardDiv.style.display = 'block';
//             // Adjust height based on time
//             const percentage = 40 - ((currentTime - 4) / 4) * 40;
//             hazardDiv.style.height = `${percentage}%`;
//         } else {
//             hazardDiv.style.display = 'none';
//         }
//     });
// });

// function checkHazard(currentTime) {
//     if (currentTime < 4) {
//         document.getElementById('feedback').innerHTML = "No hazards here...play on";
//     }
// }


// document.addEventListener('DOMContentLoaded', function() {
//     const videoStartBtn = document.querySelector("#start-btn");
//     videoStartBtn.addEventListener("click", function() {
//         const videoContainer = document.querySelector("#video-container");
//         videoContainer.style.display = 'block';

//         const videoElement = document.getElementById('defensive-video');
//         videoElement.style.maxHeight = '40vh'; // Set the max height of the video

//         const videoQuestion = document.querySelector(".question");
//         videoQuestion.style.display = 'none';

//         makeInteractive();
//     });
// });

// function makeInteractive() {
//     const videoElement = document.getElementById('defensive-video');
//     const hazardDiv = document.getElementById('hazard-1');
//     const feedbackDiv = document.getElementById('feedback');

//     videoElement.addEventListener('click', function() {
//         // Toggle play/pause
//         if (videoElement.paused) {
//             videoElement.play();
//             feedbackDiv.style.display = 'none';
//         } else {
//             videoElement.pause();
//             feedbackDiv.style.display = 'block';
//             checkHazard(videoElement.currentTime);
//         }
//     });

//     hazardDiv.addEventListener('click', function() {
//         feedbackDiv.innerHTML = "Well done! You spotted the pedestrian crossing";
//     });

//     videoElement.addEventListener('timeupdate', function() {
//         const currentTime = videoElement.currentTime;
//         if (currentTime >= 4 && currentTime <= 8) {
//             hazardDiv.style.display = 'block';
//             // Adjust height based on time
//             const percentage = 40 - ((currentTime - 4) / 4) * 40;
//             hazardDiv.style.height = `${percentage}%`;
//         } else {
//             hazardDiv.style.display = 'none';
//         }
//     });
// });

// function checkHazard(currentTime) {
//     if (currentTime < 4) {
//         document.getElementById('feedback').innerHTML = "No hazards here...play on";
//     }
// }
