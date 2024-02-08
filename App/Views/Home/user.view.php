
<?php
/** @var Array $data */
/** @var \App\Core\IAuthenticator $auth */
?>
<link rel="stylesheet" href="/public/css/Home/products.css">

<body>

<button onclick="window.history.back();" class="btn btn-outline-dark mt-auto">Späť</button>
<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-5 g-4">
        <?php foreach ($data["users"] as $user): ?>
            <div class="col mb-5">
                <div class="card">
                    <!-- Sale badge-->
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?= $user["login"] ?> </div>
                    <!-- Product image-->
                    <img class="card-img-top" src="" >
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                        </div>
                    </div>
                    <!-- Product actions-->

                    <?php if($auth->getUserRole() == 1): ?>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="index.php?c=home&a=editUser&id=<?= $user["id"] ?>">Upravit</a></div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <button class="btn btn-outline-dark mt-auto" id="btn_delete_<?= $user["id"] ?>" onclick="deleteUser(<?= $user["id"] ?>)">
                                    Zmazať
                                </button>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        <?php endforeach; ?>

        <?php if($auth->getUserRole() == 1): ?>
            <a href="index.php?c=home&a=addUser">
                <button class="btn btn-warning px-3 center"  type="button">Pridať</button>
            </a>
        <?php endif; ?>



        <script src="/public/js/delete.js"></script>

</body>