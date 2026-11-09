async function getCart() {
    const response = await fetch('./php/getCardInfo.php');
    if (!response.ok) {
        throw new Error(`Cart request failed: ${response.status}`);
    }
    const data = await response.json();

    return data.cart
}


async function getCartInfo() {
    try {
        const response = await fetch('data/product-data.JSON');
        if (!response.ok) {
            throw new Error(`Failed to load product data: ${response.status}`);
        }
        return await response.json();
    } catch (error) {
        console.error('Failed to load the catalog:', error);
        throw error;
    }
};

async function updateBucket() {
    const currentCart = await getCart();
    const validIteamsCart = currentCart.filter(product => product.quantity > 0)
    const bucketDot = document.querySelector('.bucket_container span');
    const totalLine = document.querySelector('.Cart-page__total span')
    bucketDot?.classList.toggle(
        'bucket-dot',
        validIteamsCart.length > 0
    );

    const cartList = document.querySelector('.Cart-page__iteams');
    if (!cartList) return;

    const CartInfo = await getCartInfo();
    const Count = validIteamsCart.reduce((acc, product) => acc + product.quantity, 0);
    const CountLabel = document.querySelector('.Cart-page__summary-row span');
    if (CountLabel) CountLabel.textContent = String(Count);

    cartList?.replaceChildren();

    if (validIteamsCart.length === 0) {
        document.querySelector('.Cart-page__submit').disabled = true
        document.querySelector('.Cart-page__submit').classList.remove('Cart-page__submit--active')
        totalLine.textContent = '0';
        const li = document.createElement('li');
        li.classList.add('Cart-page__iteams--empty');
        cartList.append(li);
    } else {
        let totalCount = 0
        totalLine.textContent = totalCount
        document.querySelector('.Cart-page__submit').disabled = false
        document.querySelector('.Cart-page__submit').classList.add('Cart-page__submit--active')
        validIteamsCart.forEach((product) => {
            const currentCardInfo = CartInfo[product.product_id]?.data;
            if (!currentCardInfo) {
                console.error(`Product with id "${product.product_id}" was not found in the catalog.`);
                return;
            }
            totalCount += Number(currentCardInfo.price) * Number(product.quantity)
            totalLine.textContent = totalCount

            const li = document.createElement('li');
            li.classList.add('Cart-page__iteam');
            li.innerHTML = `<a class="product-card" href="product-card.php?id=${product.product_id}">
        <div class="Cart-page__image">
            <img src="${currentCardInfo.image[0]}" alt="${currentCardInfo.name}">
        </div>
        <div class="Cart-page__p">
            <div class="Cart-page__name">${currentCardInfo.name}</div>
            <div class="Cart-page__price">$${currentCardInfo.price}</div>
        </div>
        </a>
        <button class="product-card__order product-card__order--active" type="button" id='${product.product_id}'>
            <span class="product-card__order-minus" aria-hidden="true"></span>
            <span class="product-card__order-count">${product.quantity}</span>
            <span class="product-card__order-plus" aria-hidden="true"></span>
        </button>`
            cartList.append(li);
        });

    }
}


async function restoreCartButtons() {
    const currentButtonStatus = await getCart();
    for (let i = 0; i < currentButtonStatus.length; i++) {
        const product = currentButtonStatus[i];
        const button = document.getElementById(product.product_id);
        if (!button) continue;
        const countLabel = button.querySelector('.product-card__order-count');
        if (!countLabel) continue;

        button.classList.toggle(
            'product-card__order--active',
            product.quantity > 0
        );
        countLabel.textContent = product.quantity > 0
            ? product.quantity
            : 'Order';
    }
    await updateBucket();
}

window.addEventListener('DOMContentLoaded', restoreCartButtons);
window.addEventListener('product-cards-rendered', restoreCartButtons);

document.addEventListener('click', async (event) => {
    const target = event.target;
    if (!(target instanceof Element)) return;

    const orderClick = target.closest('.product-card__order');
    if (!orderClick) return;

    const plusClick = target.closest('.product-card__order-plus');
    const minusClick = target.closest('.product-card__order-minus');
    const countLabel = orderClick.querySelector('.product-card__order-count');
    if (!countLabel) return;

    const productId = orderClick.id;
    const isActive = orderClick.classList.contains('product-card__order--active');
    const action = !isActive
        ? 'increment'
        : minusClick
            ? 'decrement'
            : plusClick
                ? 'increment'
                : null;

    async function sendCartAction(productId, action) {
        const response = await fetch('./php/cart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                productId: productId,
                action: action
            })
        });
        if (!response.ok) {
            throw new Error(`Cart request failed: ${response.status}`);
        }
        const data = await response.json();

        return data;
    }

    if (!action) return;

    const data = await sendCartAction(productId, action);
    countLabel.textContent = data.quantity;
    if (data.quantity === 0) {
        countLabel.textContent = 'Order';
        orderClick.classList.remove('product-card__order--active');
    } else {
        orderClick.classList.add('product-card__order--active');
    }

    await updateBucket();
})


const cartForm = document.querySelector('.Cart-page__order-form')

cartForm.addEventListener('submit', async (event) => {
    event.preventDefault();
    let errorMessage = cartForm.querySelector('.error')
    try {
        const response = await fetch(cartForm.action, {
            method: cartForm.method,
            body: new FormData(cartForm)
        });

        if (!response.ok) {
            throw new Error(`HTTP ${response.status}`);
        }

        const result = await response.text();
        errorMessage.textContent = result

        alert('Payment is not allowed for now, maybe later :)');
    } catch (error) {
        console.log(error.message);
    }
});
