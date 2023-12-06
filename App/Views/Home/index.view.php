<?php
/** @var Array $data */
//print_r($data["tps"]);exit();
?>
<link rel="stylesheet" href="/public/css/Home/index.css">

<body>

<div id="carouselExampleCaptions" class="carousel slide top">
    <div class="carousel-inner " role="listbox" style=" width:100%; height: 600px ;">
        <div class="carousel-item active ">
            <img src= public/images/01.jpg class="d-block velkostObrazka" alt="1">
            <div class="carousel-caption d-none d-md-block top ">
            </div>
    </div>
        <div class="carousel-item">
            <img src="public/images/02.jpg" class="d-block velkostObrazka" alt="1">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="public/images/03.jpg" class="d-block velkostObrazka" alt="1">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
        <div class="carousel-indicators" style="bottom: 10px">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
</div>

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