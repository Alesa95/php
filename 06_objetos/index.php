<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manga</title>
    <?php require 'manga.php' ?>
</head>
<body>
    <?php
    $manga1 = new Manga("Bloom into you 01", "Planeta Cómic", 168);
    $manga2 = new Manga("Café Liebe 01", "Planeta Cómic", 150);

    echo $manga1 -> titulo . "<br>";
    echo $manga2 -> titulo . "<br>";
    $manga1 -> editorial = "Planeta de Cómic";
    echo $manga1 -> editorial . "<br>";
    ?>
</body>
</html>