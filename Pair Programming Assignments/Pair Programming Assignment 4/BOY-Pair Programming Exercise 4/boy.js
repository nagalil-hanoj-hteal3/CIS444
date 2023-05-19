// Get the radio buttons by their class names
const eyeButtons = document.querySelectorAll('.eye');
const mouthButtons = document.querySelectorAll('.mouth');
const noseButtons = document.querySelectorAll('.nose');

// eye
for(let i=0; i<eyeButtons.length; i++)
{
    if(i == 0) // first button
        eyeButtons[i].addEventListener("change", blueEye);  
    else    
        eyeButtons[i].addEventListener("change", sleepyEye);       

}

function blueEye(){
    const eye = document.getElementById("eyepic");
    eye.src = "img/eye1.png";
}

function sleepyEye(){
    const eye = document.getElementById("eyepic");
    eye.src = "img/eye2.png";
}


// mouth
for(let i=0; i<mouthButtons.length; i++)
{
    if(i == 0) 
        mouthButtons[i].addEventListener("change",smile); 
    else if(i == 1) 
        mouthButtons[i].addEventListener("change",laugh);
    else    
        mouthButtons[i].addEventListener("change",vampire);       

}

function smile(){
    const mouth = document.getElementById("mouthpic");
    mouth.src = "img/mouth1.png";
}

function laugh(){
    const mouth = document.getElementById("mouthpic");
    mouth.src = "img/mouth2.png";
}

function vampire(){
    const mouth = document.getElementById("mouthpic");
    mouth.src = "img/mouth3.png";
}

// nose
for(let i=0; i<noseButtons.length; i++)
{
    if(i == 0) 
        noseButtons[i].addEventListener("change",regular); 
    else    
        noseButtons[i].addEventListener("change",small);       

}

function regular(){
    const nose = document.getElementById("nosepic");
    nose.src = "img/nose1.png";
}

function small(){
    const nose = document.getElementById("nosepic");
    nose.src = "img/nose2.png";
}