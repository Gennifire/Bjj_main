let sliderImages = document.querySelectorAll('.slide'),
    arrowLeft = document.querySelector('#arrow-left'),
    arrowRight = document.querySelector('#arrow-right'),
    current = 0;

//clear all images
function reSet(){
    for (let i = 0; i < sliderImages.length; i++){
        sliderImages[i].style.display = 'none';
    }
}

//initialise slides
function startSlide(){
    reSet();
    sliderImages[0].style.display = 'block';
}

//move left
function showPrevious(){
    reSet();
    sliderImages[current - 1].style.display = 'block';
    current--;
}

//move right
function showNext(){
    reSet();
    sliderImages[current + 1].style.display = 'block';
    current++;
}

//left arrow click
arrowLeft.addEventListener('click', function(){
    if (current === 0){
        current = sliderImages.length;
    }
    showPrevious();
});

//left arrow click
arrowRight.addEventListener('click', function(){
    if (current === sliderImages.length -1){
        current = -1;
    }
    showNext();
});

startSlide();