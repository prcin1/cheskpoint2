<?php

$layout = 'auth';
/** @var \App\Core\LinkGenerator $link */
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/Auth/logout.css">
    <title>Logout Message</title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signout my-5">
                <div class="card-body text-center">
                    <p class="lead">Boli ste úspešne odhlásený !</p>
                    <p>Znovu <a href="<?= \App\Config\Configuration::LOGIN_URL ?>">prihlásiť</a>
                        alebo vrátiť sa <a href="<?= $link->url("home.index") ?>">späť</a>
                        na hlavnú stránku?</p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
