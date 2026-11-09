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
</head>

<body>
    <div class="wrapper">
        <?php headerModule('main'); ?>
        <div class="header-body">
            <div class="container header-body__inner" id="products">
                <div class="header-body__content">
                    <div class="header-body__copy">
                        <h1 class="header-body__title main_tittle" id="header-body-title">
                            <span class="header-body__title-line">Crafted</span>
                            <span class="header-body__title-line">for <span
                                    class="main_tittle__brand">Focus</span>.</span>
                        </h1>
                        <p class="header-body__subtitle">Designed for Life.</p>
                    </div>
                    <a class="header-body__button button" href="product-card.php">
                        <span>Explore the Experience</span>
                        <img class="header-body__button-icon" src="image/icons/arrow.svg" alt="">
                    </a>
                </div>
                <div class="header-body__image">
                    <img src="image/image 2 no bg.png" alt="Silver over-ear headphones with a minimalist design">
                </div>
            </div>
        </div>
        <main>
            <section class="feature-sections">
                <div class="container">
                    <ul class="feature-sections__list">
                        <li class="feature-sections__item">
                            <div class="feature-sections__performance">
                                <div class="feature-sections__performance-image">
                                    <img src="image/image 3.png" alt="Close-up of the headphone controls">
                                </div>
                                <div class="feature-sections__performance-content">
                                    <p class="feature-sections__number">01.</p>
                                    <div class="feature-sections__performance-copy">
                                        <h2 class="feature-sections__title">
                                            Engineered for<br>Pure Performance.
                                        </h2>
                                        <p class="feature-sections__description">
                                            Every detail is precisely crafted to deliver exceptional sound, comfort, and
                                            clarity.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="feature-sections__item">
                            <div class="feature-sections__technology">
                                <div class="feature-sections__technology-content">
                                    <p class="feature-sections__number">02.</p>
                                    <div class="feature-sections__technology-copy">
                                        <h2 class="feature-sections__title">
                                            Technology That<br>Elevates Every Moment.
                                        </h2>
                                        <p class="feature-sections__description">
                                            Advanced acoustic architecture for immersive sound and intelligent noise
                                            control.
                                        </p>
                                    </div>
                                </div>
                                <div class="feature-sections__technology-image">
                                    <img src="image/image 6.png" alt="Detail of the headphone's precision control dial">
                                </div>
                            </div>
                        </li>
                        <li class="feature-sections__item">
                            <div class="feature-sections__design">
                                <div class="feature-sections__design-image">
                                    <img src="image/image 4.png" alt="Minimalist audio products arranged together">
                                </div>
                                <div class="feature-sections__design-content">
                                    <p class="feature-sections__number">03.</p>
                                    <div class="feature-sections__design-copy">
                                        <h2 class="feature-sections__title">
                                            Minimal Design.<br>Maximum Impact.
                                        </h2>
                                        <p class="feature-sections__description">
                                            A timeless silhouette that fits seamlessly into your life and your world.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="product-grid" id="product-grid">
                <div class="container">
                    <ul class="product-grid__list">
                        <li class="product-grid__item">
                            <a class="product-card" href="product-card.php?id=00">
                                <div class="product-card__image">
                                    <img src="image/image 2 no bg.png" alt="Nothing Headphones">
                                </div>
                                <div class="product-card__details">
                                    <h2 class="product-card__name">Nothing Headphones</h2>
                                    <p class="product-card__price">$299</p>
                                </div>
                            </a>
                            <button class="product-card__order" type="button" id="00">
                                <span class="product-card__order-minus" aria-hidden="true"></span>
                                <span class="product-card__order-count">Order</span>
                                <span class="product-card__order-plus" aria-hidden="true"></span>
                            </button>
                        </li>
                        <li class="product-grid__item">
                            <a class="product-card" href="product-card.php?id=01">
                                <div class="product-card__image">
                                    <img src="image/image 3.png" alt="Headphone 1 Pro">
                                </div>
                                <div class="product-card__details">
                                    <h2 class="product-card__name">Headphone 1 Pro</h2>
                                    <p class="product-card__price">$199</p>
                                </div>
                            </a>
                            <button class="product-card__order" type="button" id="01">
                                <span class="product-card__order-minus" aria-hidden="true"></span>
                                <span class="product-card__order-count">Order</span>
                                <span class="product-card__order-plus" aria-hidden="true"></span>
                            </button>
                        </li>
                        <li class="product-grid__item">
                            <a class="product-card" href="product-card.php?id=02">
                                <div class="product-card__image">
                                    <img src="image/image 6.png" alt="Ecosystem Bundle">
                                </div>
                                <div class="product-card__details">
                                    <h2 class="product-card__name">Ecosystem Bundle</h2>
                                    <p class="product-card__price">$149</p>
                                </div>
                            </a>
                            <button class="product-card__order" type="button" id="02">
                                <span class="product-card__order-minus" aria-hidden="true"></span>
                                <span class="product-card__order-count">Order</span>
                                <span class="product-card__order-plus" aria-hidden="true"></span>
                            </button>
                        </li>
                        <li class="product-grid__item">
                            <a class="product-card" href="product-card.php?id=03">
                                <div class="product-card__image">
                                    <img src="image/image 4.png" alt="Master Headphones">
                                </div>
                                <div class="product-card__details">
                                    <h2 class="product-card__name">Master Headphones</h2>
                                    <p class="product-card__price">$399</p>
                                </div>
                            </a>
                            <button class="product-card__order" type="button" id="03">
                                <span class="product-card__order-minus" aria-hidden="true"></span>
                                <span class="product-card__order-count">Order</span>
                                <span class="product-card__order-plus" aria-hidden="true"></span>
                            </button>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="cta-section">
                <div class="container">
                    <div class="cta-banner">
                        <div class="cta-banner__content">
                            <h2 class="cta-banner__title" id="cta-banner-title">
                                <span>Sound that Inspires.</span>
                                <span>Design that Lasts.</span>
                            </h2>
                            <p class="cta-banner__description">Join the future of premium audio.</p>
                        </div>
                        <a class="cta-banner__button button" href="products.php">
                            <span>Discover More</span>
                            <img class="cta-banner__button-icon" src="image/icons/arrow.svg" alt="">
                        </a>
                    </div>
                </div>
            </section>
        </main>
        <?php footerModule('main'); ?>
    </div>
</body>
<script src="js/main.js"></script>
<script src="js/Cart.js"></script>

</html>