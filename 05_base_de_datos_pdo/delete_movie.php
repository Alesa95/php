<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if($_POST["accion"] == "borrar") {
            $id = $_POST["id"];
        
            //  Preparamos la sentencia
            $stmt = $dbh -> prepare("DELETE FROM peliculas WHERE id=:id");
            //  Hacemos el bind y la ejecutamos
            if ($stmt -> execute(array(':id'=>$id))) {
                echo "Se ha eliminado el registro";
            }
        }
    }
?>