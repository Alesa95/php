<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single-Page Forms</title>
</head>
<body>
    <?php   //  Respuesta PHP al formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //  Recibimos la información del formulario
            $titulo = $_POST["titulo"];
            $editorial = $_POST["editorial"];

            //  Mostramos la información en párrafmos HTML
            echo "<h2>Información recibida a través del método POST</h2>";
            echo "<p>$titulo</p>";
            echo "<p>$editorial</p>";
        }
    ?>

    <!-- Estructura HTML del formulario -->
    <h1>Cómics</h1>
    <form action="" method="post">
        <label>Título</label>
        <input type="text" name="titulo">
        <br><br>
        <label>Editorial</label>
        <input type="text" name="editorial">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>