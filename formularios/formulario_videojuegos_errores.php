<?php

    $nombre = $precio = $descripcion = $consola = "";
    $err_nombre = $err_precio = $err_descripcion = $err_consola = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if(empty($_POST["nombre"])) {
            $err_nombre = "Introduzca el nombre";
        } else {
            $nombre = depurar($_POST["nombre"]);
        }

        if(empty($_POST["precio"])) {
            $err_precio = "Introduzca el precio";
        } else {
            $precio = depurar($_POST["precio"]);
        }

        if(empty($_POST["descripcion"])) {
            $err_descripcion = "Introduzca la descripción";
        } else {
            $descripcion = depurar($_POST["descripcion"]);
        }

        if(empty($_POST["consola"])) {
            $err_consola = "Seleccione una consola";
        } else {
            $consola = depurar($_POST["consola"]);
        }
    }

    function depurar($dato) {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Nombre: <input type="text" name="nombre">
    <span class="error">* <?php echo $err_nombre;?></span>
    <br><br>
    Precio: <input type="text" name="precio">
    <span class="error">* <?php echo $err_precio;?></span>
    <br><br>
    Descripción: <input type="text" name="descripcion"><br><br>

    <input type="radio" name="consola" value="PS4">PS4
    <input type="radio" name="consola" value="NINTENDO SWITCH">Nintendo Switch
    <input type="radio" name="consola" value="XBOX ONE">Xbox One

    <br><br>

    <input type="submit" value="Enviar">
    
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Videojuego seleccionado:</h2>";
        echo $nombre;
        echo "<br>";
        echo $precio;
        echo "<br>";
        echo $descripcion;
        echo "<br>";
        echo $consola;
    }
?>
