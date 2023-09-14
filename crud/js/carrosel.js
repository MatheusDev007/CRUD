const btn_antes = document.getElementById('btn_antes');
const btn_next = document.getElementById('btn_next');
const slide = document.querySelector('.carousel-slide');

const MAX_SLIDES = 4; // Número máximo de slides
const MIN_SLIDE = 0;  // Slide mínimo

let counter = 0;

btn_next.addEventListener('click', () => {
    counter = (counter + 1) % MAX_SLIDES;
    updateSlide();
});

btn_antes.addEventListener('click', () => {
    counter = (counter - 1 + MAX_SLIDES) % MAX_SLIDES;
    updateSlide();
});

function updateSlide() {
    slide.style.transform = `translateX(-${counter * 100}%)`;
}
