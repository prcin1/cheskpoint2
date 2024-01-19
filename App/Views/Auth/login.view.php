<?php

$layout = 'auth';
/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */
?>
<link rel="stylesheet" href="/public/css/Auth/login.css">

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">

            <div class="card bg-dark text-white" style="border-radius: 1rem; width: 40%; height: 600px; min-width: 400px">
                <div class="card-body p-5 text-center">

                    <div class="mb-md-5 mt-md-4 pb-5">
                        <h2 class="fw-bold mb-2 text-uppercase">Prihlásenie</h2>
                        <?php if (isset($data['message'])): ?>
                            <p class="text-danger mb-5"><?= $data['message'] ?></p>
                        <?php else: ?>
                            <p class="text-white-50 mb-5">Prosím zadajte Meno a Heslo!</p>
                        <?php endif; ?>

                        <form class="form-signin" method="post" action="<?= $link->url("login") ?>">
                            <div class="form-outline form-white mb-4">
                                <input name="login" type="text" id="login" class="form-control form-control-lg" placeholder="Login" required autofocus>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input name="password" type="password" id="password" class="form-control form-control-lg" placeholder="Password" required>
                                <label class="form-label" for="typePasswordX">Password</label>
                            </div>
                            <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submit">Login</button>
                        </form>

                        <div class="mt-4">
                            <p class="mb-2" style="margin-top: 10px">Nemáte účet?
                                <a href="<?= $link->url("Auth.register") ?>" class="text-gold-50 fw-bold">Registácia</a>
                            </p>
                        </div>
                        <div class="mt-41">
                                <a href="<?= $link->url("Home.index") ?>" class="text-gold-50 fw-bold">Späť</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
