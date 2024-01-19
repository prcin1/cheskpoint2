<?php

$layout = 'auth';
/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */
//print_r($data['message']);exit();
?>
<link rel="stylesheet" href="/public/css/Auth/register.css">

<form method="post" action="<?= $link->url("register") ?>">
    <div class="container">
        <h1>Zaregistruj sa</h1>
        <p>Prosím Vás, vyplnte nasledujúce údaje</p>
        <div class="text-center text-danger mb-3">
            <?= @$data['message'] ?>
        </div>
        <hr>

        <label for="meno"><b>Prihlasovacie Meno</b></label>
        <input type="text" placeholder="Zadaj Prihlasovacie Meno" id="prihlasovacieMeno" name="login" required>

        <label for="psw"><b>Heslo</b></label>
        <input type="password" placeholder="Zadajte Heslo" id="psw" name="psw" required>

        <label for="psw-repeat"><b>Zopakujte Heslo</b></label>
        <input type="password" placeholder="Zopakujte Heslo" id="psw-repeat" name="psw_repeat" required>

        <div class="clearfix">
            <button type="submit" class="signup" name="register">Registrovať sa</button>
        </div>
        <div class="mt-41">
            <a href="<?= $link->url("Home.index") ?>" class="text-gold-50 fw-bold">Späť</a>
            </p>
        </div>
    </div>
</form>
