// Video question

const videoStartBtn = document.querySelector("#start-btn");
videoStartBtn.addEventListener("click", function(){
    const video = document.querySelector("#video");
    //video.innerHTML = '<div style="padding:56.25% 0 0 0;position:relative;"><iframe id="defensive-video" src="https://player.vimeo.com/video/500440443?h=38b7dd1ff8&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>';
    video.style.display = 'block';
    const videoQuestion = document.querySelector(".question");
    videoQuestion.style.display = 'none';
    makeInteractive();
});

function makeInteractive(){
    const defensiveVideo = document.querySelector("#defensive-video");
    defensiveVideo.addEventListener('click', function(event){
        //pause video on click (disable pausing with spacebar)
        const vimeo = new Vimeo.Player(defensiveVideo);
        //then check coordinates of where in the video user clicked

        //store time

        //check against database (or local) if coordinates + time is correct or wrong
        
        // give instant feedback (div as overlay on top left corner of the 
        // video with feedback text)

        //Show resume button (also listen for spacebar click now)

    })
}

document.addEventListener('DOMContentLoaded', function() {
    const videoElement = document.getElementById('defensive-video');
    const hazardDiv = document.getElementById('hazard-1');
    const feedbackDiv = document.getElementById('feedback');

    videoElement.addEventListener('click', function() {
        // Toggle play/pause
        if (videoElement.paused) {
            videoElement.play();
            feedbackDiv.style.display = 'none';
        } else {
            videoElement.pause();
            feedbackDiv.style.display = 'block';
            checkHazard(videoElement.currentTime);
        }
    });

    hazardDiv.addEventListener('click', function() {
        feedbackDiv.innerHTML = "Well done! You spotted the pedestrian crossing";
    });

    videoElement.addEventListener('timeupdate', function() {
        const currentTime = videoElement.currentTime;
        if (currentTime >= 4 && currentTime <= 8) {
            hazardDiv.style.display = 'block';
            // Adjust height based on time
            const percentage = 40 - ((currentTime - 4) / 4) * 40;
            hazardDiv.style.height = `${percentage}%`;
        } else {
            hazardDiv.style.display = 'none';
        }
    });
});

function checkHazard(currentTime) {
    if (currentTime < 4) {
        document.getElementById('feedback').innerHTML = "No hazards here...play on";
    }
}


document.addEventListener('DOMContentLoaded', function() {
    const videoStartBtn = document.querySelector("#start-btn");
    videoStartBtn.addEventListener("click", function() {
        const videoContainer = document.querySelector("#video-container");
        videoContainer.style.display = 'block';

        const videoElement = document.getElementById('defensive-video');
        videoElement.style.maxHeight = '40vh'; // Set the max height of the video

        const videoQuestion = document.querySelector(".question");
        videoQuestion.style.display = 'none';

        makeInteractive();
    });
});

function makeInteractive() {
    const videoElement = document.getElementById('defensive-video');
    const hazardDiv = document.getElementById('hazard-1');
    const feedbackDiv = document.getElementById('feedback');

    videoElement.addEventListener('click', function() {
        // Toggle play/pause
        if (videoElement.paused) {
            videoElement.play();
            feedbackDiv.style.display = 'none';
        } else {
            videoElement.pause();
            feedbackDiv.style.display = 'block';
            checkHazard(videoElement.currentTime);
        }
    });

    hazardDiv.addEventListener('click', function() {
        feedbackDiv.innerHTML = "Well done! You spotted the pedestrian crossing";
    });

    videoElement.addEventListener('timeupdate', function() {
        const currentTime = videoElement.currentTime;
        if (currentTime >= 4 && currentTime <= 8) {
            hazardDiv.style.display = 'block';
            // Adjust height based on time
            const percentage = 40 - ((currentTime - 4) / 4) * 40;
            hazardDiv.style.height = `${percentage}%`;
        } else {
            hazardDiv.style.display = 'none';
        }
    });
}

function checkHazard(currentTime) {
    if (currentTime < 4) {
        document.getElementById('feedback').innerHTML = "No hazards here...play on";
    }
}
