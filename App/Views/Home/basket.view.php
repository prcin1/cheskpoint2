<?php
/** @var Array $data */
//print_r($data["products"]);exit();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nákupný košík</title>
</head>
<link rel="stylesheet" href="/public/css/Home/basket.css">
<script src="/public/js/basket.js"></script>
<body>

<div class="cart">
    <h2>Nákupný košík</h2>
    <?php foreach ($data["products"] as $product): ?>
        <div class="product" id="<?= $product["id"] ?>">
            <img src="<?= $product["cesta"] ?>" alt="Product 1">
            <div class="product-details">
                <h3><?= $product["nazov"] ?></h3>
                <p>Cena:  <?= $product["cena"] ?></p>
                <button class="remove-button" onclick="deleteFromCart(<?= $product["id"] ?>, $(this))">Odstrániť</button>
            </div>
        </div>
    <?php endforeach; ?>

</div>

</body>

</html>
