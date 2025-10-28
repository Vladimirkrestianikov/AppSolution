const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
const next = document.querySelector('.right-btn');
const prev = document.querySelector('.left-btn');

let index = 0;
const total = slides.length;
function showSlide(i) {
    index = (i + total) % total;
    slider.style.transition = 'transform 0.8s cubic-bezier(0.77, 0, 0.175, 1)';
    slider.style.transform = `translateX(-${index * 100}%)`;
}

next.addEventListener('click', () => showSlide(index + 1));
prev.addEventListener('click', () => showSlide(index - 1));

let startX = 0;
let endX = 0;

slider.addEventListener('touchstart', (e) => {
    startX = e.touches[0].clientX;
});

slider.addEventListener('touchend', (e) => {
    endX = e.changedTouches[0].clientX;
    if (startX - endX > 50) showSlide(index + 1);
    if (endX - startX > 50) showSlide(index - 1);
});
