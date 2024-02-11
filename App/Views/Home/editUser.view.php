<?php
/** @var Array $data */
//print_r($data["tps"]);exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upravenie položky</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/Home/add.css">
    <!-- Pridanie odkazu na knižnicu Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
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
</html>