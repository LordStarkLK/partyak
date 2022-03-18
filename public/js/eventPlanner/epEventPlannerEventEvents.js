const imageSlide = document.querySelector('.image-slide');
const carouselImages = document.querySelectorAll('.image-slide img');

//Buttons
const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');

//Counter
let counter = 1;
const size = carouselImages[0].clientWidth;


imageSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

//Button Listner
nextBtn.addEventListener('click',()=>{
    if(counter>= carouselImages.length - 1) return;
    imageSlide.style.transition = "transform 0.4s ease-in-out";
    counter++; 
    imageSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

prevBtn.addEventListener('click',()=>{
    if(counter<=0) return;
    imageSlide.style.transition = "transform 0.4s ease-in-out";
    counter--; 
    imageSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

imageSlide.addEventListener('transitionend', ()=> {
    if(carouselImages[counter].id === 'last-clone'){
        imageSlide.style.transition = "none";
        counter = carouselImages.length - 2;
        imageSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }
    if(carouselImages[counter].id === 'first-clone'){
        imageSlide.style.transition = "none";
        counter = carouselImages.length - counter;
        imageSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }
});