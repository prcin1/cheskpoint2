<?php
/** @var Array $data */
/** @var Array $typer */
/** @var \App\Core\IAuthenticator $auth */
//print_r($data["tps"]);exit();
?>
<head>
    <title>Detail produktu</title>
</head>
<link rel="stylesheet" href="/public/css/Home/detail.css">
<script src="/public/js/detail.js"></script>
<body>

<div class="product-details">
    <img src="<?= $data['product']["cesta"] ?>" style="width: 100%" alt="Product Image" class="product-image">
    <h2><?= $data['product']["nazov"] ?></h2>
    <p><strong>Cena:</strong> <?= $data['product']["cena"] ?>€</p>
    <p><strong>Popis:</strong> <?= $data['product']["popis"] ?> </p>
    <p><strong>Kód produktu:</strong> <?= $data['product']["id"] ?></p>
    <p><strong>Kategória: </strong>
        <?php foreach ($data["types"] as $type): ?>
            <?php if($type["id"]==$data['product']["druh_id"]): ?>
                <?= $type["nazov"] ?>
            <?php endif; ?>
        <?php endforeach; ?> </p>

    <div class="button-container " >
        <button onclick="window.history.back();" class="btn btn-outline-dark back">Späť</button>
        <?php if($auth->isLogged()): ?>
            <button class="btn btn-outline-dark back" style="margin-left: 2px; " onclick="addToCart(<?= $data['product']["id"] ?>)">
                Vložiť
            </button>
        <?php endif; ?>
    </div>
</div>
</body>
