<?php

/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Core\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="sk">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<!--<head>
    <title><?php /*= \App\Config\Configuration::APP_NAME */?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/css/styl.css">
    <script src="public/js/script.js"></script>
</head>-->

<head>
    <meta charset="UTF-8">
    <title>T&M</title>
    <link rel="stylesheet" href="../CSS/Styl.css">
</head>

<body>
<!--<nav class="navbar navbar-expand-sm bg-light">-->
<!--    <div class="container-fluid">-->
<!--        <a class="navbar-brand" href="--><?php //= $link->url("home.index") ?><!--">-->
<!--            <img src="public/images/vaiicko_logo.png" title="--><?php //= \App\Config\Configuration::APP_NAME ?><!--"-->
<!--                 title="--><?php //= \App\Config\Configuration::APP_NAME ?><!--">-->
<!--        </a>-->
<!--        <ul class="navbar-nav me-auto">-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="--><?php //= $link->url("home.contact") ?><!--">Kontakt</a>-->
<!--            </li>-->
<!--        </ul>-->
<!--        --><?php //if ($auth->isLogged()) { ?>
<!--            <span class="navbar-text">Prihlásený používateľ: <b>--><?php //= $auth->getLoggedUserName() ?><!--</b></span>-->
<!--            <ul class="navbar-nav ms-auto">-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="--><?php //= $link->url("auth.logout") ?><!--">Odhlásenie</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        --><?php //} else { ?>
<!--            <ul class="navbar-nav ms-auto">-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="--><?php //= \App\Config\Configuration::LOGIN_URL ?><!--">Prihlásenie</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        --><?php //} ?>
<!--    </div>-->
<!--</nav>-->

<nav class="navbar navbar-expand-sm navbar-transparent bg-transparent" aria-label="Third navbar example">
    <div class="container-fluid">
        <a class="navbar-brand " href=<?php  $link->url("home.index") ?>>Mastodontný obchod</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link" href="Onas.html">O nás</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Predajne.html">Predajne/Kontakt</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Košík <i class="bi bi-basket"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Login.html" >Prihlásiť <i class="bi bi-person-fill"></i></a>
                </li>
            </ul>
            <form role="search">
                <input class="form-control" type="search" placeholder="Hľadaj" aria-label="Search">
            </form>
        </div>
    </div>
</nav>
<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="Uvod.html" class="nav-link px-2 text-body-secondary">Domov</a></li>
        <li class="nav-item"><a href="Onas.html" class="nav-link px-2 text-body-secondary">O nás</a></li>
        <li class="nav-item"><a href="Predajne.html" class="nav-link px-2 text-body-secondary">Predajne/Kontakt</a></li>
    </ul>
    <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
</footer>
</body>
</html>
