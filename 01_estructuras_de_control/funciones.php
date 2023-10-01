<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <?php
    function sumaDos (int $num1, int $num2 = 0) {
        return $num1 + $num2;
    }

    function concatena (...$palabras) {
        $resultado = "";
        foreach($palabras as $palabra) {
            $resultado .= $palabra;
        }
    }
    ?>

    <?php
    echo "<h3>" . sumaDos(3) . "</h3>";
    echo "<h3>" . sumaDos(1,3) . "</h3>";
    ?>
</body>
</html>