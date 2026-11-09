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
    <link rel="stylesheet" href="css/about.css">
</head>

<body>
    <div class="wrapper">
        <?php headerModule('about'); ?>
        <main>
            <section class="about-page" aria-labelledby="about-page-title">
                <div class="container">
                    <h1 class="about-page__title main_tittle" id="about-page-title">
                        <span class="header-body__title-line">About</span>
                        <span class="header-body__title-line main_tittle__brand">Nothing</span>
                    </h1>
                    <div class="about-page__stories">
                        <section class="about-story about-story--intro">
                            <figure class="about-story__image about-story__image--portrait">
                                <img src="image/about/image 7.png" alt="Person wearing Nothing headphones">
                                <svg class="about-story__cross about-story__cross--top" viewBox="0 0 30 30"
                                    aria-hidden="true" focusable="false">
                                    <path d="M0 15h30M15 0v30" />
                                </svg>
                            </figure>
                            <div class="about-story__content">
                                <div class="about-story__heading">
                                    <p class="about-story__number">01.</p>
                                    <h2 class="about-story__title" id="about-story-title-1">
                                        Minimal Design.<br>Maximum Impact.
                                    </h2>
                                </div>
                                <div class="about-story__copy about-story__copy--intro">
                                    <p>Using the best of global engineering and supply-chain production, we design hardware that excites us.</p>
                                    <p>Our design language is transparent in appearance and ethos. Revealing what is beneath the surface, showing the decisions behind the engineering and making space for the human experience our products are made to enhance.</p>
                                    <p>Drawing inspiration from culture and creating connections to music, fashion, art, film, architecture and design, our references span 90s rave culture, aerospace materials and what matters to our community today.</p>
                                </div>
                            </div>
                        </section>
                        <section class="about-story about-story--rebellion">
                            <div class="about-story__content">
                                <div class="about-story__heading">
                                    <p class="about-story__number">02.</p>
                                    <h2 class="about-story__title" id="about-story-title-2">
                                        Rebelling against<br>the status quo.
                                    </h2>
                                </div>
                                <div class="about-story__copy about-story__copy--rebellion">
                                    <p>There was a time when tech was exciting. We looked at machines in bright colours and saw a future of new connections and new ways of engaging with the world. But everything is the same now. We're bored.</p>
                                    <p>We're making tech fun. This means creating bold, beautiful and unusual designs for products and software that aid creativity, not distract you. It means imagining a different, better future for humanity. Rebelling against the status quo.</p>
                                </div>
                            </div>
                            <figure class="about-story__image about-story__image--landscape">
                                <img src="image/about/image 8.jpg" alt="Woman wearing Nothing headphones">
                                <svg class="about-story__cross about-story__cross--bottom" viewBox="0 0 30 30"
                                    aria-hidden="true" focusable="false">
                                    <path d="M0 15h30M15 0v30" />
                                </svg>
                            </figure>
                        </section>
                        <section class="about-story about-story--design">
                            <figure class="about-story__image about-story__image--portrait-large">
                                <img src="image/about/image 9.jpg" alt="Nothing headphones held beside a dark outfit">
                                <svg class="about-story__cross about-story__cross--bottom-left" viewBox="0 0 30 30"
                                    aria-hidden="true" focusable="false">
                                    <path d="M0 15h30M15 0v30" />
                                </svg>
                            </figure>
                            <div class="about-story__content">
                                <div class="about-story__heading">
                                    <p class="about-story__number">03.</p>
                                    <h2 class="about-story__title" id="about-story-title-3">
                                        Different by<br>design
                                    </h2>
                                </div>
                                <div class="about-story__copy about-story__copy--design">
                                    <p>Using the best of global engineering and supply-chain production, we design hardware that excites us.</p>
                                    <p>Our design language is transparent in appearance and ethos. Revealing what is beneath the surface, showing the decisions behind the engineering and making space for the human experience our products are made to enhance.</p>
                                    <p>Drawing inspiration from culture and creating connections to music, fashion, art, film, architecture and design, our references span 90s rave culture, aerospace materials and what matters to our community today.</p>
                                </div>
                            </div>
                        </section>
                        <section class="slider-about">
                            <div class="slider-about_inner">
                                <div class="slider-about_arrows" aria-label="buttons">
                                    <button class="slider-about_arrow-left">
                                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_2_34)">
                                                <path d="M31.2931 7.29199L14.5861 23.999L31.2931 40.706L32.7071 39.292L17.4141 23.999L32.7071 8.70599L31.2931 7.29199Z" fill="black" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2_34">
                                                    <rect width="48" height="48" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                    <button class="slider-about_arrow-rigth">
                                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_2_44)">
                                                <path d="M15.293 8.70599L30.586 23.999L15.293 39.292L16.707 40.706L33.414 23.999L16.707 7.29199L15.293 8.70599Z" fill="black" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2_44">
                                                    <rect width="48" height="48" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </div>
                                <div class="slider-about_image-collection">
                                    <img src="./image/image 2.png" alt="">
                                    <img src="./image/image 3.png" alt="">
                                    <img src="./image/image 4.png" alt="">
                                    <img src="./image/image 6.png" alt="">
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </main>
        <?php footerModule('about'); ?>
    </div>
</body>
<script src="js/main.js"></script>
<script src="js/Cart.js"></script>

</html>