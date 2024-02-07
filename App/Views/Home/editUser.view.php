<?php
/** @var Array $data */
//print_r($data["tps"]);exit();
?>

<link rel="stylesheet" href="/public/css/Home/add.css">
<body>

<h2>Spravovanie účtu</h2>

<form  method="post">

    <label for="user">Použivateľ:</label><br>

    <select id="user" name="user">
        <?php foreach ($data["users"] as $users): ?>
            <option value="<?= $users["login"] ?>"  ></option>
        <?php endforeach; ?>
    </select><br><br>


    <?php foreach ($data["types"] as $type): ?>
        <option value="<?= $type["id"] ?>" <?= $type["id"]==$data['product']["druh_id"]?"selected":"" ?>><?= $type["nazov"] ?></option>
    <?php endforeach; ?>

    <label for="name">Heslo:</label><br>
    <input type="text" placeholder="Zadajte Heslo" id="pasw" name="pasw"><br><br>

    <label for="description">Zopakuj heslo</label><br>
    <input type="text" placeholder="Zopakujte Heslo" id="pasw_repeat" name="pasw_repeat"><br><br>

    <input type="submit" name="submit" value="Zmeniť">
</form>

</body>
