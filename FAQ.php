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
    <link rel="stylesheet" href="css/faq.css">
</head>

<body>
    <div class="wrapper">
        <?php headerModule('faq'); ?>
        <div class="faq">
            <div class="container faq__inner" id="products">
                <div class="faq__header">
                    <div class="faq__copy">
                        <h1 class="faq__title main_tittle" id="faq-title">
                            <span class="faq__title-line">FAQ</span>
                            <span class="main_tittle__brand">Answers</span>
                        </h1>
                        <p class="faq__subtitle">The most popular questions</p>
                    </div>
                    <a class="faq__button button" href="./index.php ">
                        <span>Take me back</span>
                        <img class="faq__button-icon" src="image/icons/arrow.svg" alt="">
                    </a>
                </div>
                <div class="FAQ-content">
                    <ul class="FAQ_list">
                        <li class="FAQ_list_item">
                            <button class="FAQ_button" type="button" aria-expanded="false">
                                <span class="FAQ_content">
                                    <span class="FAQ_name">How can I place an order?</span>
                                </span>
                                <span class="arrow_icon">
                                    <svg width="18" height="10" viewBox="0 0 18 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.25 1.25L8.53571 8.33333L15.8214 1.25" stroke="#CECAC4"
                                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </button>
                            <div class="FAQ_description invisible">
                                Browse our collection, add your chosen devices to the cart, and complete checkout with
                                your contact and delivery details. You will receive an order confirmation by email.
                            </div>
                        </li>
                        <li class="FAQ_list_item">
                            <button class="FAQ_button" type="button" aria-expanded="false">
                                <span class="FAQ_content">
                                    <span class="FAQ_name">What payment methods do you accept?</span>
                                </span>
                                <span class="arrow_icon">
                                    <svg width="18" height="10" viewBox="0 0 18 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.25 1.25L8.53571 8.33333L15.8214 1.25" stroke="#CECAC4"
                                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </button>
                            <div class="FAQ_description invisible">
                                You can pay securely at checkout using the payment methods available in your region.
                                The total cost, including any delivery fees, is shown before you place your order.
                            </div>
                        </li>
                        <li class="FAQ_list_item">
                            <button class="FAQ_button" type="button" aria-expanded="false">
                                <span class="FAQ_content">
                                    <span class="FAQ_name">How does delivery work?</span>
                                </span>
                                <span class="arrow_icon">
                                    <svg width="18" height="10" viewBox="0 0 18 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.25 1.25L8.53571 8.33333L15.8214 1.25" stroke="#CECAC4"
                                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </button>
                            <div class="FAQ_description invisible">
                                We will send tracking information as soon as your order is dispatched. Delivery times
                                and options depend on your location and are displayed during checkout.
                            </div>
                        </li>
                        <li class="FAQ_list_item">
                            <button class="FAQ_button" type="button" aria-expanded="false">
                                <span class="FAQ_content">
                                    <span class="FAQ_name">Can I return a product or request a repair?</span>
                                </span>
                                <span class="arrow_icon">
                                    <svg width="18" height="10" viewBox="0 0 18 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.25 1.25L8.53571 8.33333L15.8214 1.25" stroke="#CECAC4"
                                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </button>
                            <div class="FAQ_description invisible">
                                If your device is faulty or you are not satisfied with your purchase, contact our
                                support team with your order number. We will explain the available return or warranty
                                options.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php footerModule('faq'); ?>
    </div>
</body>
<script src="js/main.js"></script>
<script src="js/Cart.js"></script>

</html>