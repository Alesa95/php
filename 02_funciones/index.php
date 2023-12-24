<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de funciones</title>
    <?php require_once 'temperatura.php' ?>
</head>
<body>
    <h1>Test de funciones</h1>
    <h2>Usa esta página para probar las diferentes funciones de este apartado.</h2>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        if(isset($_GET["f"])) {
            switch($_GET["f"]) {
                case "temperatura":
                    $temperatura = $_GET["temperatura"];
                    $unidadI = $_GET["unidadI"];
                    $unidadF = $_GET["unidadF"];
                    $temperatura_final = convertirTemperatura($temperatura, $unidadI, $unidadF);
                    break;
                case "iva":
                    break;
                case "irpf":
                    break;
            }
        }
    }
    ?>

    <section>
        <form action="" method="get">
            <input type="hidden" name="f" value="temperatura">
            <label>Temperatura</label>
            <input type="number" name="temperatura">
            <br><br>
            <label>Unidad introducida</label>
            <input type="radio" name="unidadI" value="C">Celsius
            <input type="radio" name="unidadI" value="K">Kelvin
            <input type="radio" name="unidadI" value="F">Fahrenheit
            <br><br>
            <label>Unidad a convertir</label>
            <input type="radio" name="unidadF" value="C">Celsius
            <input type="radio" name="unidadF" value="K">Kelvin
            <input type="radio" name="unidadF" value="F">Fahrenheit
            <br><br>
            <input type="submit" value="Convertir">
            <?php
            if(isset($temperatura_final)) {
                echo "<p>La temperatura en $unidadF es $temperatura_final</p>";
            }
            ?>
        </form>
    </section>

    <section>
        <form action="" method="get">

        </form>
    </section>
</body>
</html>