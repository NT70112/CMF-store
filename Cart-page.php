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
    <link rel="stylesheet" href="css/cart.css">
</head>

<body>
    <div class="wrapper">
        <?php headerModule('support'); ?>
        <section class="Cart-page">
            <div class="container">
                <h1 class="Cart-page__title">Cart</h1>
                <div class="Cart-page__content">
                    <ul class="Cart-page__iteams">
                    </ul>
                    <form class="Cart-page__order-form" method="post" action='./php/cart-validate.php'>
                        <h2 class="Cart-page__contacts-title">Contacts</h2>
                        <div class="Cart-page__contacts-inputs">
                            <input class="Cart-page__contacts-input" type="text" placeholder="Name" name="name" required>
                            <input class="Cart-page__contacts-input" type="tel" placeholder="Phone" name="phone" required>
                            <span class="error"></span>
                        </div>
                        <div class="Cart-page__summary">
                            <div class="Cart-page__summary-row">
                                Items count <span>1</span>
                            </div>
                            <div class="Cart-page__summary-row">
                                Discount <span>0$</span>
                            </div>
                            <div class="Cart-page__total">
                                Total <span></span>
                            </div>
                        </div>
                        <input class="Cart-page__submit Cart-page__submit--active" type="submit" value="Order" aria-label="Order">
                    </form>
                </div>
            </div>
        </section>
        <?php footerModule('support'); ?>
    </div>
</body>
<script src="js/main.js"></script>
<script src="js/Cart.js"></script>

</html>