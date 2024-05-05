const body = document.body;
let popupBasketBg = document.querySelector('.popup-basket-bg');
let popupBasket = document.querySelector('.popup-basket');
let openBasketButtons = document.querySelector('.open-basket-popup');
let closeBasketButton = document.querySelector('.close-basket-popup');

openBasketButtons.addEventListener('click', (e) => {
	e.preventDefault();
	popupBasketBg.classList.add('active');
	popupBasket.classList.add('active');
	body.classList.add('no-scroll');
})

closeBasketButton.addEventListener('click', () => {
	popupBasketBg.classList.remove('active');
	popupBasket.classList.remove('active');
	body.classList.remove('no-scroll');
});

document.addEventListener('click', (e) => {
	if (e.target === popupBasketBg) {
		popupBasketBg.classList.remove('active');
		popupBasket.classList.remove('active');
		body.classList.remove('no-scroll');
	}
});