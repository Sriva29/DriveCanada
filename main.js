const answers = document.querySelectorAll(".answer");

answers.forEach((button)=>{
    button.addEventListener("click", function(){
        answers.forEach(btn=>btn.classList.remove('selected'));
        this.classList.add('selected');
    });
})


const imageAnswers = document.querySelectorAll(".image-answer");

imageAnswers.forEach((button)=>{
    button.addEventListener("click", function(){
        document.querySelectorAll('image-answer').forEach(btn =>btn.classList.remove('selected'));
        this.classList.add('selected');
    });
})