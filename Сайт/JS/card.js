const main = document.querySelector('.main-body');
fetch('../XML/products.xml')
	.then(response => response.text())
	.then(xmlString => {
		const parser = new DOMParser();
		const xml = parser.parseFromString(xmlString, 'text/xml');

		const products = xml.querySelectorAll('product');

		products.forEach(product => {
			const image = product.querySelector('image').textContent;
			const title = product.querySelector('title').textContent;
			const price = product.querySelector('price').textContent;

			const card = document.createElement('div');
			card.classList.add('card');

			const img = document.createElement('img');
			img.src = image;
			img.classList.add('card-img');
			card.appendChild(img);

			const cardText = document.createElement('div');
			cardText.classList.add('card-text');
			const h5 = document.createElement('h5');
			h5.textContent = title;
			cardText.appendChild(h5);
			card.appendChild(cardText);

			const cardBtn = document.createElement('div');
			cardBtn.classList.add('card-btn');
			const p = document.createElement('p');
			p.textContent = price;
			cardBtn.appendChild(p);

			const a = document.createElement('a');
			a.href = '/pages/catalog.php';
			a.textContent = 'Купить';
			cardBtn.appendChild(a);
			card.appendChild(cardBtn);

			main.appendChild(card);
		});
	});
