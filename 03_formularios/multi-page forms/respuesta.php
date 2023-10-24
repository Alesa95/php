<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta</title>
</head>
<body>
    <?php   //  Respuesta PHP al formulario
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            //  Recibimos la información del formulario
            $nombre = $_GET["nombre"];
            $edad = (int)$_GET["edad"];

            //  Mostramos la información en párrafmos HTML
            echo "<h2>Información recibida a través del método GET</h2>";
            echo "<p>$nombre</p>";
            echo "<p>$edad</p>";
        }
    ?>
</body>
</html>