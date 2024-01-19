<?php
/** @var Array $data */
//print_r($data["tps"]);exit();
?>
<link rel="stylesheet" href="/public/css/Home/index.css">
<script src="/public/js/Carousel.js"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap Carousel</title>
</head>

<body>

<div id="carouselExampleCaptions" class="carousel slide carousel-fade top" data-ride="carousel">
    <div class="carousel-inner" role="listbox" style="width:100%; height: 600px;">
        <div class="carousel-item active">
            <img src="public/images/01.jpg" class="d-block velkostObrazka" alt="1">
            <div class="carousel-caption d-none d-md-block top">
                <!-- Vaša obsah slide -->
            </div>
        </div>
        <div class="carousel-item">
            <img src="public/images/02.jpg" class="d-block velkostObrazka" alt="2">
            <div class="carousel-caption d-none d-md-block">
                <!-- Vaša obsah slide -->
            </div>
        </div>
        <div class="carousel-item">
            <img src="public/images/03.jpg" class="d-block velkostObrazka" alt="3">
            <div class="carousel-caption d-none d-md-block">
                <!-- Vaša obsah slide -->
            </div>
        </div>
    </div>
</div>
<!-- jQuery, Popper.js, Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<h1 class="title">Vyberte si vašu aktivitu! </h1>


<div class="card-group mx-auto" style=" left: 100px; right: 100px; border: black; margin-top: 10px" >
    <?php foreach ($data["tps"] as $type): ?>
        <div class="card mx-auto" style="min-width: 200px; max-width: 200px">
            <img class="card-img-top" src=<?= $type["cesta"] ?> alt="Card image cap">
            <div class="card-body">
                <a href="index.php?c=home&a=products&id=<?= $type["id"] ?>" class="btn btn-primary"> <?= $type["nazov"] ?></a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>