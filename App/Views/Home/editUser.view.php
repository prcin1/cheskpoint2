<?php
/** @var Array $data */
//print_r($data["tps"]);exit();
?>

<link rel="stylesheet" href="/public/css/Home/add.css">
<body>

<h2>Upravenie položky</h2>

<form  method="post">

    <label for="name">login:</label><br>
    <input type="text" id="name" name="login" required value="<?= $data['user']["login"]?>" ><br><br>

    <label for="type">Rola:</label><br>
    <select id="type" name="role">
        <?php foreach ($data["roles"] as $role): ?>
            <option value="<?= $role["id"] ?>" <?= $role["id"]==$data["user"]["roleId"]?"selected":"" ?>><?= $role["name"] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <input type="submit" name="submit" value="Upraviť">
</form>

</body>
