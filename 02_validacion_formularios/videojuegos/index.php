<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Videojuegos</title>
</head>
<body>
    <h1>Videojuegos</h1>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require 'depurar.php';
            
            $temp_nombre = depurar($_POST["nombre"]);
            $temp_precio = depurar($_POST["precio"]);
            if (isset($_POST["consola"])) $temp_consola = depurar($_POST["consola"]);
            

            if (empty($temp_nombre)) {
                $err_nombre = "El nombre es obligatorio";
            } 

            if (empty($temp_precio)) {
                $err_precio = "El precio es obligatorio";
            } 

            if (empty($temp_consola)) {
                $err_consola = "Selecciona una consola";
            }
        }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Nombre: <input type="text" name="nombre">
        <span class="error">* <?php if (isset($err_nombre)) echo $err_nombre; ?></span>
        <br><br>
        Precio: <input type="text" name="precio">
        <span class="error">* <?php if (isset($err_precio)) echo $err_precio; ?></span>
        <br><br>
        <select name="consola">
            <option value="" selected disabled hidden>Selecciona consola</option>
            <option value="ps4">Playstation 4</option>
            <option value="ps5">Playstation 5</option>
            <option value="switch">Nintendo Switch</option>
        </select>
        <span class="error">* <?php if (isset($err_consola)) echo $err_consola; ?></span>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
