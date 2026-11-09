const renderCards = (products, productList) => {
    Object.keys(products).forEach((id) => {
        const product = products[id].data;
        const li = document.createElement('li');
        li.classList.add('product-grid__item')

        li.innerHTML = `
                <a class="product-card" href="product-card.php?id=${id}">
            <div class="product-card__image">
                <img src="${product.image[0]}" alt="${product.name}">
            </div>
            <div class="product-card__details">
                <h2 class="product-card__name">${product.name}</h2>
                <p class="product-card__price">$${product.price}</p>
            </div>
        </a>
        <button class="product-card__order" type="button" id=${id}>
            <span class="product-card__order-minus" aria-hidden="true"></span>
            <span class="product-card__order-count">Order</span>
            <span class="product-card__order-plus" aria-hidden="true"></span>
        </button>
        `

        productList.append(li);
    });
};

export {
    renderCards
};
