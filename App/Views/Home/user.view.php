
<?php
/** @var Array $data */
/** @var \App\Core\IAuthenticator $auth */
?>

<link rel="stylesheet" href="/public/css/Home/products.css">
<script src="/public/js/deleteUser.js"></script>

<body>
<button onclick="window.history.back();" class="btn btn-outline-dark mt-auto">Späť</button>
<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-5 g-4">
        <?php foreach ($data["users"] as $user): ?>
            <div class="user col mb-5">
                <div class="card">
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?= $user["login"] ?> </div>
                    <img class="card-img-top" src="public/images/11.jpg" >
                    <div class="card-body p-4">
                        <div class="text-center"></div>
                    </div>
                    <?php if($auth->getUserRole() == 1): ?>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="index.php?c=home&a=editUser&id=<?= $user["id"] ?>">Upravit</a></div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <button class="btn btn-outline-dark mt-auto" id="btn_delete<?= $user["id"] ?>" onclick="deleteUser(<?= $user["id"] ?>, $(this))">Zmazať
                                </button>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
        <?php if($auth->getUserRole() == 1): ?>
            <a href="index.php?c=auth&a=register">
                <button class="btn btn-warning px-3 center"  type="button">Pridať</button>
            </a>
        <?php endif; ?>
</body>