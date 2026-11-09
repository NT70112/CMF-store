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
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <div class="wrapper">
        <?php headerModule('support'); ?>
        <div class="form-page">
            <div class="container form-page__inner" id="products">
                <div class="form-page__header">
                    <div class="form-page__copy">
                        <h1 class="form-page__title main_tittle" id="form-page-title">
                            <span class="form-page__title-line">Something</span>
                            <span class="main_tittle__brand">Wrong?</span>
                        </h1>
                        <p class="form-page__subtitle">Write your message and
                            we’ll answer as soon as possible.</p>
                    </div>
                    <a class="form-page__button button" href="./index.php ">
                        <span>Take me back</span>
                        <img class="form-page__button-icon" src="image/icons/arrow.svg" alt="">
                    </a>
                </div>
                <form class="form" method="post" action="./php/formValidate.php">
                    <div class="form-background container"></div>
                    <div class="form-main">
                        <div class="input-row">
                            <label for="">name</label>
                            <input class='input-row_text' type="text" placeholder="write your name" name="name">
                        </div>
                        <div class="input-row">
                            <label for="">email</label>
                            <input class='input-row_text' type="email" placeholder="write your email" name="email" required>
                        </div>
                        <div class="input-row">
                            <label for="">message</label>
                            <input class='input-row_text' type="text" placeholder="write your message" name="message">
                        </div>
                        <p class="form__message"></p>
                        <input class='form-button button' type="submit" value="send">
                    </div>
                </form>
            </div>
        </div>
        <?php footerModule('support'); ?>
    </div>
</body>
<script src="js/main.js"></script>
<script src="js/Cart.js"></script>

</html>