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
        return $resultado;
    }

    function sumaNumeros (int|float $num1, int|float $num2) {
        return $num1 + $num2;
    }

    function sumaNumerosResEntero (int|float $num1, int|float $num2) : int {
        return $num1 + $num2;
    }
    ?>
 
    <?php
    echo "<h3>" . sumaDos(3) . "</h3>";
    echo "<h3>" . sumaDos(1,3) . "</h3>";
    echo "<h3>" . concatena("Hola", " ", "mundo!") . "</h3>";
    echo "<h3>" . sumaNumeros(1.5,3) . "</h3>";
    echo "<h3>" . sumaNumerosResEntero(1.5,3) . "</h3>";
    ?>
</body>
</html>