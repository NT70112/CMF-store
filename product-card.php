<?php
require_once __DIR__ . '/php/modules.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMF</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product-card.css">
</head>

<body>
    <div class="wrapper">
        <?php headerModule('product'); ?>
        <main>
            <section class="product-detail" aria-label="Product details">
                <div class="container">
                    <div class="product-card__inner">
                        <nav class="product-detail__path">
                            <a href="products.php">Products</a>
                            <svg viewBox="0 0 12 12" aria-hidden="true">
                                <path d="m4.5 2.5 3.5 3.5-3.5 3.5" />
                            </svg>
                            <a href="products.php">Headphones</a>
                            <svg viewBox="0 0 12 12" aria-hidden="true">
                                <path d="m4.5 2.5 3.5 3.5-3.5 3.5" />
                            </svg>
                            <span aria-current="page"></span>
                        </nav>
                        <div class="product-detail__img" aria-label="Product images">
                            <img src="" alt="">
                        </div>
                        <div class="product-detail__gallery__container" aria-label="Product images">
                            <ul class="product-detail__gallery">
                            </ul>
                        </div>
                        <div class="product-detail__info">
                            <div class="product-detail__brand">
                                <span class="product-detail__brand-mark" aria-hidden="true"><img
                                        src="image/icons/Nothing/Nothing_idpJTG0e4F_1.svg" alt=""></span>
                            </div>
                            <h1 class="product-detail__title"></h1>
                            <div class="product-detail__rating">
                                <div class="product-detail__stars" aria-label="Product rating">
                                    <svg viewBox="0 0 16 16" aria-hidden="true">
                                        <path
                                            d="m8 1.3 2.05 4.16 4.59.67-3.32 3.24.78 4.57L8 11.78l-4.1 2.16.78-4.57L1.36 6.13l4.59-.67L8 1.3Z" />
                                    </svg>
                                    <svg viewBox="0 0 16 16" aria-hidden="true">
                                        <path
                                            d="m8 1.3 2.05 4.16 4.59.67-3.32 3.24.78 4.57L8 11.78l-4.1 2.16.78-4.57L1.36 6.13l4.59-.67L8 1.3Z" />
                                    </svg>
                                    <svg viewBox="0 0 16 16" aria-hidden="true">
                                        <path
                                            d="m8 1.3 2.05 4.16 4.59.67-3.32 3.24.78 4.57L8 11.78l-4.1 2.16.78-4.57L1.36 6.13l4.59-.67L8 1.3Z" />
                                    </svg>
                                    <svg viewBox="0 0 16 16" aria-hidden="true">
                                        <path
                                            d="m8 1.3 2.05 4.16 4.59.67-3.32 3.24.78 4.57L8 11.78l-4.1 2.16.78-4.57L1.36 6.13l4.59-.67L8 1.3Z" />
                                    </svg>
                                    <svg class="product-detail__star--empty" viewBox="0 0 16 16" aria-hidden="true">
                                        <path
                                            d="m8 1.3 2.05 4.16 4.59.67-3.32 3.24.78 4.57L8 11.78l-4.1 2.16.78-4.57L1.36 6.13l4.59-.67L8 1.3Z" />
                                    </svg>
                                </div>
                                <a href="#reviews">Reviews</a>
                                <button class="product-detail__compare" type="button" aria-label="Compare product">
                                    <svg viewBox="0 0 20 20" aria-hidden="true">
                                        <path d="M5 16V9m5 7V4m5 12v-5" />
                                    </svg>
                                </button>
                                <button class="product-detail__favorite" type="button"
                                    aria-label="Add to favorites">
                                    <svg viewBox="0 0 20 20" aria-hidden="true">
                                        <path
                                            d="M17.3 7.1c0 4.1-7.3 9-7.3 9s-7.3-4.9-7.3-9a3.8 3.8 0 0 1 7.3-1.4 3.8 3.8 0 0 1 7.3 1.4Z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="product-detail__summary">
                                <p class="product-detail_short-characteristics"></p>
                                <p class="product-detail_short-description"><a href="#description">Learn more</a></p>
                            </div>
                            <div class="product-detail__options">
                                <fieldset class="product-detail__colors">
                                    <div>Color</div>
                                    <label class="product-detail__color">
                                        <input type="radio" name="product-color" value="black" checked>
                                        <span
                                            class="product-detail__color-swatch product-detail__color-swatch--black"></span>
                                        <span>Black</span>
                                    </label>
                                    <label class="product-detail__color">
                                        <input type="radio" name="product-color" value="green">
                                        <span
                                            class="product-detail__color-swatch product-detail__color-swatch--white"></span>
                                        <span>White</span>
                                    </label>
                                </fieldset>
                                <fieldset class="product-detail__features">
                                    <div>Technology</div>
                                    <ul>
                                        <li><label><input type="radio" name="product-feature" value="anc"
                                                    checked>Adaptive ANC</label></li>
                                        <li><label><input type="radio" name="product-feature" value="ldac">LDAC</label>
                                        </li>
                                    </ul>
                                </fieldset>
                            </div>
                            <p class="product-detail__price"></p>
                            <button class="product-card__order product-detail__order" type="button" id="">
                                <span class="product-card__order-minus" aria-hidden="true"></span>
                                <span class="product-card__order-count">Order</span>
                                <span class="product-card__order-plus" aria-hidden="true"></span>
                            </button>
                            <div class="product-detail__availability">
                                <a href="#stores">
                                    <svg viewBox="0 0 20 20" aria-hidden="true">
                                        <path d="M3 8V4.5h14V8M4.5 8v8h11V8M3 8h14M7 16v-4h6v4" />
                                    </svg>
                                    Available in 20 stores
                                </a>
                                <a href="#delivery">
                                    <svg viewBox="0 0 20 20" aria-hidden="true">
                                        <path
                                            d="M2 5h10v9H2zM12 8h3l3 3v3h-6M5 16a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Zm10 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z" />
                                    </svg>
                                    Delivery
                                </a>
                            </div>
                        </div>
                        <section class="product-detail__description" id="description" aria-label="Product description">
                            <div class="product-detail__tabs" role="tablist" aria-label="Product information">
                                <button class="product-detail__tab product-detail__tab--active" type="button" role="tab"
                                    aria-selected="true" id="product-description">Description</button>
                                <button class="product-detail__tab" type="button" role="tab" aria-selected="false"
                                    id="characteristics">Specifications</button>
                                <button class="product-detail__tab" type="button" role="tab" aria-selected="false"
                                    id="reviews">Reviews</button>
                            </div>
                            <p></p>
                            <div class="product-detail_review-cards">
                                <div class="product-detail_review-card  invisible-card">
                                    <div class="product-detail_review-card_top">
                                        <div class="avatar">
                                            <svg width="32" height="26" viewBox="0 0 32 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_2009_320)">
                                                    <path
                                                        d="M19.3927 16.498C21.7333 15.2727 23.3333 12.8254 23.3333 10C23.3333 5.95002 20.05 2.66669 16 2.66669C11.95 2.66669 8.66667 5.95002 8.66667 10C8.66667 12.8254 10.2667 15.2727 12.6073 16.498C7.26 18.06 3.33333 23.206 3.33333 29.3334H28.6667C28.6667 23.206 24.74 18.06 19.3927 16.498ZM10 10C10 6.69135 12.6913 4.00002 16 4.00002C19.3087 4.00002 22 6.69135 22 10C22 13.3087 19.3087 16 16 16C12.6913 16 10 13.3087 10 10ZM16 17.3334C21.8233 17.3334 26.6353 22.0087 27.264 28H4.736C5.36467 22.0087 10.1767 17.3334 16 17.3334Z"
                                                        fill="black" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2009_320">
                                                        <rect width="32" height="32" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="review-card_name">Alexei</div>
                                        <div class="review-card_stars">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.865 1.75501L7.745 3.51501C7.865 3.76001 8.185 3.99501 8.455 4.04001L10.05 4.30501C11.07 4.47501 11.31 5.21501 10.575 5.94501L9.335 7.18501C9.125 7.39501 9.01 7.80001 9.075 8.09001L9.43 9.62501C9.71 10.84 9.065 11.31 7.99 10.675L6.495 9.79001C6.225 9.63001 5.78 9.63001 5.505 9.79001L4.01 10.675C2.94 11.31 2.29 10.835 2.57 9.62501L2.925 8.09001C2.99 7.80001 2.875 7.39501 2.665 7.18501L1.425 5.94501C0.695 5.21501 0.93 4.47501 1.95 4.30501L3.545 4.04001C3.81 3.99501 4.13 3.76001 4.25 3.51501L5.13 1.75501C5.61 0.800007 6.39 0.800007 6.865 1.75501Z"
                                                    fill="#FFBB3E" stroke-width="0.75" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke="#FFBB3E" />
                                            </svg>
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.865 1.75501L7.745 3.51501C7.865 3.76001 8.185 3.99501 8.455 4.04001L10.05 4.30501C11.07 4.47501 11.31 5.21501 10.575 5.94501L9.335 7.18501C9.125 7.39501 9.01 7.80001 9.075 8.09001L9.43 9.62501C9.71 10.84 9.065 11.31 7.99 10.675L6.495 9.79001C6.225 9.63001 5.78 9.63001 5.505 9.79001L4.01 10.675C2.94 11.31 2.29 10.835 2.57 9.62501L2.925 8.09001C2.99 7.80001 2.875 7.39501 2.665 7.18501L1.425 5.94501C0.695 5.21501 0.93 4.47501 1.95 4.30501L3.545 4.04001C3.81 3.99501 4.13 3.76001 4.25 3.51501L5.13 1.75501C5.61 0.800007 6.39 0.800007 6.865 1.75501Z"
                                                    fill="#FFBB3E" stroke-width="0.75" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke="#FFBB3E" />
                                            </svg>
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.865 1.75501L7.745 3.51501C7.865 3.76001 8.185 3.99501 8.455 4.04001L10.05 4.30501C11.07 4.47501 11.31 5.21501 10.575 5.94501L9.335 7.18501C9.125 7.39501 9.01 7.80001 9.075 8.09001L9.43 9.62501C9.71 10.84 9.065 11.31 7.99 10.675L6.495 9.79001C6.225 9.63001 5.78 9.63001 5.505 9.79001L4.01 10.675C2.94 11.31 2.29 10.835 2.57 9.62501L2.925 8.09001C2.99 7.80001 2.875 7.39501 2.665 7.18501L1.425 5.94501C0.695 5.21501 0.93 4.47501 1.95 4.30501L3.545 4.04001C3.81 3.99501 4.13 3.76001 4.25 3.51501L5.13 1.75501C5.61 0.800007 6.39 0.800007 6.865 1.75501Z"
                                                    fill="#FFBB3E" stroke-width="0.75" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke="#FFBB3E" />
                                            </svg>
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.865 1.75501L7.745 3.51501C7.865 3.76001 8.185 3.99501 8.455 4.04001L10.05 4.30501C11.07 4.47501 11.31 5.21501 10.575 5.94501L9.335 7.18501C9.125 7.39501 9.01 7.80001 9.075 8.09001L9.43 9.62501C9.71 10.84 9.065 11.31 7.99 10.675L6.495 9.79001C6.225 9.63001 5.78 9.63001 5.505 9.79001L4.01 10.675C2.94 11.31 2.29 10.835 2.57 9.62501L2.925 8.09001C2.99 7.80001 2.875 7.39501 2.665 7.18501L1.425 5.94501C0.695 5.21501 0.93 4.47501 1.95 4.30501L3.545 4.04001C3.81 3.99501 4.13 3.76001 4.25 3.51501L5.13 1.75501C5.61 0.800007 6.39 0.800007 6.865 1.75501Z"
                                                    fill="#FFBB3E" stroke-width="0.75" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke="#FFBB3E" />
                                            </svg>
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.865 1.75501L7.745 3.51501C7.865 3.76001 8.185 3.99501 8.455 4.04001L10.05 4.30501C11.07 4.47501 11.31 5.21501 10.575 5.94501L9.335 7.18501C9.125 7.39501 9.01 7.80001 9.075 8.09001L9.43 9.62501C9.71 10.84 9.065 11.31 7.99 10.675L6.495 9.79001C6.225 9.63001 5.78 9.63001 5.505 9.79001L4.01 10.675C2.94 11.31 2.29 10.835 2.57 9.62501L2.925 8.09001C2.99 7.80001 2.875 7.39501 2.665 7.18501L1.425 5.94501C0.695 5.21501 0.93 4.47501 1.95 4.30501L3.545 4.04001C3.81 3.99501 4.13 3.76001 4.25 3.51501L5.13 1.75501C5.61 0.800007 6.39 0.800007 6.865 1.75501Z"
                                                    stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke="#FFBB3E" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="product-detail_review-card_text">Nothing Headphone (1) is an over-ear
                                        wireless headphone with Nothing's signature transparent design. Its 40 mm
                                        dynamic drivers, adaptive active noise cancellation, and transparency mode
                                        help tailor the listening experience to your surroundings.</p>
                                </div>
                                <div class="product-detail_review-card  invisible-card">
                                    <div class="product-detail_review-card_top">
                                        <div class="avatar">
                                            <svg width="32" height="26" viewBox="0 0 32 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_2009_320)">
                                                    <path
                                                        d="M19.3927 16.498C21.7333 15.2727 23.3333 12.8254 23.3333 10C23.3333 5.95002 20.05 2.66669 16 2.66669C11.95 2.66669 8.66667 5.95002 8.66667 10C8.66667 12.8254 10.2667 15.2727 12.6073 16.498C7.26 18.06 3.33333 23.206 3.33333 29.3334H28.6667C28.6667 23.206 24.74 18.06 19.3927 16.498ZM10 10C10 6.69135 12.6913 4.00002 16 4.00002C19.3087 4.00002 22 6.69135 22 10C22 13.3087 19.3087 16 16 16C12.6913 16 10 13.3087 10 10ZM16 17.3334C21.8233 17.3334 26.6353 22.0087 27.264 28H4.736C5.36467 22.0087 10.1767 17.3334 16 17.3334Z"
                                                        fill="black" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2009_320">
                                                        <rect width="32" height="32" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="review-card_name">Nikita</div>
                                        <div class="review-card_stars">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.865 1.75501L7.745 3.51501C7.865 3.76001 8.185 3.99501 8.455 4.04001L10.05 4.30501C11.07 4.47501 11.31 5.21501 10.575 5.94501L9.335 7.18501C9.125 7.39501 9.01 7.80001 9.075 8.09001L9.43 9.62501C9.71 10.84 9.065 11.31 7.99 10.675L6.495 9.79001C6.225 9.63001 5.78 9.63001 5.505 9.79001L4.01 10.675C2.94 11.31 2.29 10.835 2.57 9.62501L2.925 8.09001C2.99 7.80001 2.875 7.39501 2.665 7.18501L1.425 5.94501C0.695 5.21501 0.93 4.47501 1.95 4.30501L3.545 4.04001C3.81 3.99501 4.13 3.76001 4.25 3.51501L5.13 1.75501C5.61 0.800007 6.39 0.800007 6.865 1.75501Z"
                                                    fill="#FFBB3E" stroke-width="0.75" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke="#FFBB3E" />
                                            </svg>
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.865 1.75501L7.745 3.51501C7.865 3.76001 8.185 3.99501 8.455 4.04001L10.05 4.30501C11.07 4.47501 11.31 5.21501 10.575 5.94501L9.335 7.18501C9.125 7.39501 9.01 7.80001 9.075 8.09001L9.43 9.62501C9.71 10.84 9.065 11.31 7.99 10.675L6.495 9.79001C6.225 9.63001 5.78 9.63001 5.505 9.79001L4.01 10.675C2.94 11.31 2.29 10.835 2.57 9.62501L2.925 8.09001C2.99 7.80001 2.875 7.39501 2.665 7.18501L1.425 5.94501C0.695 5.21501 0.93 4.47501 1.95 4.30501L3.545 4.04001C3.81 3.99501 4.13 3.76001 4.25 3.51501L5.13 1.75501C5.61 0.800007 6.39 0.800007 6.865 1.75501Z"
                                                    fill="#FFBB3E" stroke-width="0.75" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke="#FFBB3E" />
                                            </svg>
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.865 1.75501L7.745 3.51501C7.865 3.76001 8.185 3.99501 8.455 4.04001L10.05 4.30501C11.07 4.47501 11.31 5.21501 10.575 5.94501L9.335 7.18501C9.125 7.39501 9.01 7.80001 9.075 8.09001L9.43 9.62501C9.71 10.84 9.065 11.31 7.99 10.675L6.495 9.79001C6.225 9.63001 5.78 9.63001 5.505 9.79001L4.01 10.675C2.94 11.31 2.29 10.835 2.57 9.62501L2.925 8.09001C2.99 7.80001 2.875 7.39501 2.665 7.18501L1.425 5.94501C0.695 5.21501 0.93 4.47501 1.95 4.30501L3.545 4.04001C3.81 3.99501 4.13 3.76001 4.25 3.51501L5.13 1.75501C5.61 0.800007 6.39 0.800007 6.865 1.75501Z"
                                                    fill="#FFBB3E" stroke-width="0.75" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke="#FFBB3E" />
                                            </svg>
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.865 1.75501L7.745 3.51501C7.865 3.76001 8.185 3.99501 8.455 4.04001L10.05 4.30501C11.07 4.47501 11.31 5.21501 10.575 5.94501L9.335 7.18501C9.125 7.39501 9.01 7.80001 9.075 8.09001L9.43 9.62501C9.71 10.84 9.065 11.31 7.99 10.675L6.495 9.79001C6.225 9.63001 5.78 9.63001 5.505 9.79001L4.01 10.675C2.94 11.31 2.29 10.835 2.57 9.62501L2.925 8.09001C2.99 7.80001 2.875 7.39501 2.665 7.18501L1.425 5.94501C0.695 5.21501 0.93 4.47501 1.95 4.30501L3.545 4.04001C3.81 3.99501 4.13 3.76001 4.25 3.51501L5.13 1.75501C5.61 0.800007 6.39 0.800007 6.865 1.75501Z"
                                                    fill="#FFBB3E" stroke-width="0.75" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke="#FFBB3E" />
                                            </svg>
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.865 1.75501L7.745 3.51501C7.865 3.76001 8.185 3.99501 8.455 4.04001L10.05 4.30501C11.07 4.47501 11.31 5.21501 10.575 5.94501L9.335 7.18501C9.125 7.39501 9.01 7.80001 9.075 8.09001L9.43 9.62501C9.71 10.84 9.065 11.31 7.99 10.675L6.495 9.79001C6.225 9.63001 5.78 9.63001 5.505 9.79001L4.01 10.675C2.94 11.31 2.29 10.835 2.57 9.62501L2.925 8.09001C2.99 7.80001 2.875 7.39501 2.665 7.18501L1.425 5.94501C0.695 5.21501 0.93 4.47501 1.95 4.30501L3.545 4.04001C3.81 3.99501 4.13 3.76001 4.25 3.51501L5.13 1.75501C5.61 0.800007 6.39 0.800007 6.865 1.75501Z"
                                                    stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke="#FFBB3E" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="product-detail_review-card_text">Nothing Headphone (1) is an over-ear
                                        wireless headphone with Nothing's signature transparent design. Its 40 mm
                                        dynamic drivers, adaptive active noise cancellation, and transparency mode
                                        help tailor the listening experience to your surroundings.</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </main>
        <?php footerModule('product'); ?>
    </div>
</body>
<script src="js/main.js"></script>
<script src="js/Cart.js"></script>

</html>