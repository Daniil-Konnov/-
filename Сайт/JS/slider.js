let currentSlide = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(n) {
	slides[currentSlide].classList.remove('active');
	currentSlide = (n + slides.length) % slides.length;
	slides[currentSlide].classList.add('active');
}

function nextSlide() {
	showSlide(currentSlide + 1);
}

function prevSlide() {
	showSlide(currentSlide - 1);
}

document.querySelector('.next').addEventListener('click', nextSlide);
document.querySelector('.prev').addEventListener('click', prevSlide);

setInterval(nextSlide, 5000);