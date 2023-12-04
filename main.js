const answers = document.querySelectorAll(".answer");

answers.forEach((button)=>{
    button.addEventListener("click", function(){
        answers.forEach(btn=>btn.classList.remove('selected'));
        this.classList.add('selected');
    });
});


const imageAnswers = document.querySelectorAll(".image-answer");

imageAnswers.forEach((button)=>{
    button.addEventListener("click", function(){
        document.querySelectorAll('image-answer').forEach(btn =>btn.classList.remove('selected'));
        this.classList.add('selected');
    });
});


//Video question

const videoStartBtn = document.querySelector("#start-btn");
videoStartBtn.addEventListener("click", function(){
    const video = document.querySelector("#video");
    video.innerHTML = '<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/or6G1gDKjrc?si=DmWlI-hd0BTj5IPf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
    video.style.display = 'block';
    const videoQuestion = document.querySelector(".question");
    videoQuestion.style.display = 'none';
});