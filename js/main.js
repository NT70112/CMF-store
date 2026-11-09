const focus = document.querySelector(".main_tittle__brand");

if (focus) {
    const originalText = focus.textContent;
    const glitchCharacters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!<>-_";

    function glitchText() {
        let frame = 0;
        const glitchInterval = window.setInterval(() => {
            focus.textContent = originalText
                .split("")
                .map((character) => {
                    if (character === " " || Math.random() > 0.55) {
                        return character;
                    }

                    return glitchCharacters[
                        Math.floor(Math.random() * glitchCharacters.length)
                    ];
                })
                .join("");

            frame += 1;
            if (frame === 5) {
                window.clearInterval(glitchInterval);
                focus.textContent = originalText;
            }
        }, 70);
    }

    window.setInterval(glitchText, 4800);
}

const burgerMenu = document.querySelector('.header-top__menu');
const bg = document.querySelector('.header-top__bg');
const shadow = document.querySelector('.header__menu-bg ');
const nuv = document.querySelector('.header-top__navigation')
const nuvBurger = document.querySelector('.header-top-burger__navigation')

burgerMenu?.addEventListener('click', () => {
    burgerMenu.classList.toggle('header-top__menu--active');
    bg.classList.toggle('header-top__menu--bg');
    nuv.classList.toggle('invisible');
    shadow.classList.toggle('invisible');
    nuvBurger.classList.toggle('header-top-burger__navigation--active')
});

function setActiveLink() {
    const activeLink = document.querySelector('.link--active');
    if (activeLink) {
        activeLink.classList.remove('link--active');
    }
    this.classList.add('link--active');

}

function setADescription() {
    const activeLink = document.querySelector('.product-detail__tab--active');
    if (activeLink) {
        activeLink.classList.remove('product-detail__tab--active');
    }
    this.classList.add('product-detail__tab--active');
    this.setAttribute('aria-selected', 'true');
    document.querySelectorAll('.product-detail__tab').forEach((tab) => {
        if (tab !== this) {
            tab.setAttribute('aria-selected', 'false');
        }
    });

}

// ------------------------------------------------------------


let products;

async function getProduct(id) {
    if (!products) {
        const response = await fetch("data/product-data.JSON");
        if (!response.ok) {
            throw new Error(`Product data request failed: ${response.status}`);
        }
        products = await response.json();
    }
    const product = products[id]?.data;
    if (!product) {
        throw new Error(`Product with id "${id}" was not found`);
    }
    return product;
}

const productId = new URLSearchParams(window.location.search).get('id') || '00';

async function showProductDescription() {
    const description = document.querySelector('.product-detail__description > p');

    if (!description) return;

    try {
        const button = document.querySelector('.product-card__order')
        button.id = productId

        const product = await getProduct(productId);
        description.textContent = product.description;

        const shortCharacteristics = document.querySelector('.product-detail_short-characteristics');
        shortCharacteristics.textContent = product.shortCharacteristics;

        const title = document.querySelector('.product-detail__title');
        if (title) title.textContent = product.name;

        const price = document.querySelector('.product-detail__price');
        price.textContent = `$${product.price}`;

        const image = document.querySelector('.product-detail__img img');
        const imageGallery = document.querySelector('.product-detail__gallery')
        if (product.image.length > 0){
            for (let i = 0; i<product.image.length; i++){
                const smallImage = document.createElement('li')
                smallImage.innerHTML = `<img src="${product.image[i]}" alt="product image" id ='${i}'>`
                smallImage.classList.add('product-detail__gallery-item')
                imageGallery.appendChild(smallImage)
            }
        }
        if (image) {
            image.src = product.image[0];
            image.alt = product.name;
        }

        document.addEventListener('click', (event)=> {
            const clickedImage = event.target.closest('.product-detail__gallery-item img')
            if (!clickedImage) return;
            image.src = clickedImage.src;
        })

        const breadcrumb = document.querySelector('.product-detail__path [aria-current="page"]');
        if (breadcrumb) breadcrumb.textContent = product.name;
    } catch (error) {
        console.error("Unable to load product details.", error);
    }
}




showProductDescription();

document.addEventListener('click', (event) => {
    const currentProductCard = event.target.closest('.product-card');
    if (!currentProductCard) return;

});

// ------------------------------------------------------------

document.addEventListener('click', async (event) => {
    const clickedDescription = event.target.closest('.product-detail__tab');
    if (clickedDescription) {
        setADescription.call(clickedDescription);
        if (clickedDescription.id === "product-description") {
            try {
                const product = await getProduct(productId);
                document.querySelector('.product-detail__description > p').textContent = product.description;
            } catch (error) {
                console.error("Unable to load product description.", error);
            }
            document.querySelectorAll('.product-detail_review-card').forEach(card => {
                card.classList.add('invisible-card');
            });
        }
        if (clickedDescription.id === "characteristics") {
            try {
                const product = await getProduct(productId);
                document.querySelector('.product-detail__description > p').textContent = product.characteristics;
            } catch (error) {
                console.error("Unable to load product characteristics.", error);
            }
            document.querySelectorAll('.product-detail_review-card').forEach(card => {
                card.classList.add('invisible-card');
            });
        }
        if (clickedDescription.id === "reviews") {
            document.querySelector('.product-detail__description > p').textContent = '';
            document.querySelectorAll('.product-detail_review-card').forEach(card => {
                card.classList.remove('invisible-card');
            });
        }
    }
});


// async function getCart() {
//     const response = await fetch('./php/getCardInfo.php');
//     if (!response.ok) {
//         throw new Error(`Cart request failed: ${response.status}`);
//     }
//     const data = await response.json();

//     return data.cart
// }

// async function updateBucketDot() {
//     const currentCart = await getCart();
//     const bucketDot = document.querySelector('.bucket_container span');
//     bucketDot?.classList.toggle(
//         'bucket-dot',
//         currentCart.some(product => product.quantity > 0)
//     );
// }

// async function restoreCartButtons() {
//     const currentButtonStatus = await getCart();
//     for (let i = 0; i < currentButtonStatus.length; i++) {
//         const product = currentButtonStatus[i];
//         const button = document.getElementById(product.product_id);
//         if (!button) continue;
//         const countLabel = button.querySelector('.product-card__order-count');
//         if (!countLabel) continue;

//         button.classList.toggle(
//             'product-card__order--active',
//             product.quantity > 0
//         );
//         countLabel.textContent = product.quantity > 0
//             ? product.quantity
//             : 'Order';
//     }
//     updateBucketDot()
// }

// window.addEventListener('DOMContentLoaded', restoreCartButtons);
// window.addEventListener('product-cards-rendered', restoreCartButtons);

// document.addEventListener('click', async (event) => {
//     const orderClick = event.target.closest('.product-card__order');
//     if (!orderClick) return;

//     const plusClick = event.target.closest('.product-card__order-plus');
//     const minusClick = event.target.closest('.product-card__order-minus');
//     const countLabel = orderClick.querySelector('.product-card__order-count');
//     if (!countLabel) return;

//     const productId = orderClick.id;

//     async function sendCartAction(productId, action) {
//         const response = await fetch('./php/cart.php', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json'
//             },
//             body: JSON.stringify({
//                 productId: productId,
//                 action: action
//             })
//         });
//         const data = await response.json();
//         console.log(data)
//         return data;
//     }

//     let data

//     if (orderClick && !orderClick.classList.contains('product-card__order--active')) {
//         data = await sendCartAction(productId, 'increment');
//         countLabel.textContent = data.quantity;
//         orderClick.classList.add('product-card__order--active');
//     }

//     if (plusClick) {
//         data = await sendCartAction(productId, 'increment');
//         countLabel.textContent = data.quantity;
//     }

//     if (minusClick) {
//         data = await sendCartAction(productId, 'decrement');
//         console.log(data)
//         countLabel.textContent = data.quantity;
//     }

//     if (!data) return;

//     if (data.quantity === 0) {
//         countLabel.textContent = 'Order';
//         orderClick.classList.remove('product-card__order--active');
//     }

//     await updateBucketDot();
// })

const imageCollection = document.querySelector('.slider-about_image-collection')

if (imageCollection) {
    const images = imageCollection.querySelectorAll('img')
    const arrowRight = document.querySelector('.slider-about_arrow-rigth')
    const arrowLeft = document.querySelector('.slider-about_arrow-left')
    const viewport = imageCollection.parentElement
    let index = 0
    let autoplayInterval

    function restartSliderInterval() {
        clearInterval(autoplayInterval)
        if (!arrowRight.classList.contains('not-active')) {
            autoplayInterval = setInterval(() => {
                index++
                updateSlider()
            }, 3000)
        }
    }

    function updateSlider() {
        const firstImage = images[0]
        const lastImage = images[images.length - 1]
        const maxOffset = Math.max(
            0,
            lastImage.offsetLeft - firstImage.offsetLeft
            + lastImage.offsetWidth - viewport.clientWidth
        )
        const imageOffset = images[index].offsetLeft - firstImage.offsetLeft
        const offset = Math.min(imageOffset, maxOffset)
        if (maxOffset < imageOffset) {
            index = images.length - (images.length - index)
        }
        arrowRight.classList.toggle('not-active', offset >= maxOffset);
        arrowLeft.classList.toggle('not-active', offset <= 0);
        if (arrowRight.classList.contains('not-active')) {
            clearInterval(autoplayInterval)
        }
        imageCollection.style.transform = `translateX(-${offset}px)`
    }

    function startSliderIntervalWhenVisible() {
        const bounds = imageCollection.getBoundingClientRect()
        if (bounds.top < window.innerHeight && bounds.bottom > 0) {
            window.removeEventListener('scroll', startSliderIntervalWhenVisible)
            restartSliderInterval()
        }
    }

    updateSlider()
    window.addEventListener('scroll', startSliderIntervalWhenVisible, { passive: true })
    startSliderIntervalWhenVisible()

    document.addEventListener('click', (event) => {
        const arrowRight = event.target.closest('.slider-about_arrow-rigth')
        const arrowLeft = event.target.closest('.slider-about_arrow-left')

        if (arrowRight && index !== images.length - 1) {
            index++
            updateSlider()
        } else if (arrowLeft && index != 0) {
            index--
            updateSlider()
        }

        if (arrowRight || arrowLeft) {
            restartSliderInterval()
        }
    })
    window.addEventListener('resize', updateSlider)
}


const form = document.querySelector('.form')

if (form) {
    form.addEventListener('submit', async (event) => {
        event.preventDefault()

        let message = document.querySelector('.form__message')
        message.setAttribute('role', 'status')

        try {
            const response = await fetch(form.action, {
                method: form.method,
                body: new FormData(form),
            })
            const result = await response.text()

            message.textContent = result
        } catch (error) {
            message.textContent = 'Could not validate the form. Please try again.'
            console.error('Form validation request failed:', error)
        }

    })
}


function toggleSlide(element, isOpening, name, arrow) {
    element.style.height = `${element.getBoundingClientRect().height}px`;
    element.classList.toggle('invisible', !isOpening);
    name.classList.toggle('FAQ_name--active');
    arrow.classList.toggle('arrow_icon_active');
    void element.offsetHeight;
    element.style.height = isOpening ? `${element.scrollHeight}px` : '0px';
}

document.addEventListener('click', (event) => {
    const button = event.target.closest('.FAQ_button');
    const description = button?.closest('.FAQ_list_item')?.querySelector('.FAQ_description');
    const name = button?.closest('.FAQ_list_item')?.querySelector('.FAQ_name');
    const arrow = button?.closest('.FAQ_list_item')?.querySelector('.arrow_icon');
    if (!button || !description) return;

    const isOpening = button.getAttribute('aria-expanded') !== 'true';
    toggleSlide(description, isOpening, name, arrow);
    button.setAttribute('aria-expanded', String(isOpening));
});
