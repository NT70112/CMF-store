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
        <?php headerModule('products'); ?>
        <main>
            <section class="product-grid" id="product-grid">
                <div class="container">
                    <ul class="product-grid__list">
                    </ul>
                </div>
            </section>
        </main>
        <?php footerModule('products'); ?>
    </div>
</body>
<script src="js/main.js"></script>
<script src="js/Cart.js"></script>
<script src="js/node.js"></script>
<script type="module" src="js/productCardsCatalog.js"></script>

</html>