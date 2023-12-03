const answers = document.querySelectorAll(".answer");

answers.forEach((button)=>{
    button.addEventListener("click", function(){
        answers.forEach(btn=>btn.classList.remove('selected'));
        this.classList.add('selected');
    });
})