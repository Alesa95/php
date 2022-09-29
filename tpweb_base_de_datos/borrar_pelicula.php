<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" &&
            $_POST["formulario"] == "borrar") {

        //  DELETE FROM peliculas WHERE id = 2
        $id = $_POST["id"];
        //echo "Queremos borrar la película con id = $id";

        $sql = "DELETE FROM peliculas WHERE id='$id'";

        if ($conexion -> query($sql) == TRUE) {
            echo "Película borrada";
        } else {
            echo "Error al borrar la película";
        }
    }
?>