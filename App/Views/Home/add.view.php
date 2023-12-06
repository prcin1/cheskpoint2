<?php
/** @var Array $data */
//print_r($data["tps"]);exit();
?>

<link rel="stylesheet" href="/public/css/Home/add.css">
<body>

<h2>Vytvorenie položky</h2>

<form  method="post">

    <label for="name">Názov:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="description">Krátky popis:</label><br>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

    <label for="price">Cena:</label><br>
    <input type="number" id="price" name="price" required min="0"><br><br>

    <label for="type">Typ:</label><br>
    <select id="type" name="type">
        <?php foreach ($data["tps"] as $type): ?>
            <option value="<?= $type["id"] ?>"><?= $type["nazov"] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label for="image">Cesta k obrázku:</label><br>
    <input type="text" id="image" name="image" required><br><br>

    <input type="submit" name="submit" value="Pridať">
</form>

</body>
</html>
