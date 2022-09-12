<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Nombre: <input type="text" name="nombre"><br><br>
    Precio: <input type="text" name="precio"><br><br>
    Descripción: <input type="text" name="descripcion"><br><br>

    <input type="radio" name="consola" value="PS4">PS4
    <input type="radio" name="consola" value="NINTENDO SWITCH">Nintendo Switch
    <input type="radio" name="consola" value="XBOX ONE">Xbox One

    <br><br>

    <input type="submit" value="Enviar">
    
</form>

<?php
    //echo $_SERVER['REMOTE_ADDR'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = depurar($_POST["nombre"]);
        $precio = depurar($_POST["precio"]);
        $descripcion = depurar($_POST["descripcion"]);

        echo "$nombre $precio $descripcion";
    }

    function depurar($dato) {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }
?>