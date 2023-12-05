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
    video.innerHTML = '<iframe src="https://player.vimeo.com/video/500440443?muted=1&amp;controls=0&amp;loop=0&amp;background=1&amp;app_id=122963" width="426" height="240" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" title="defensivedrivecanada" data-ready="true"></iframe>'
    video.style.display = 'block';
    const videoQuestion = document.querySelector(".question");
    videoQuestion.style.display = 'none';
});