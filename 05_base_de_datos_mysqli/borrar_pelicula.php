<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if($_POST["accion"] == "borrar") {
            $id = $_POST["id"];

            //  Para borrar la imagen
            $sql = "SELECT * FROM peliculas WHERE id=$id";
            $resultado = $conexion -> query($sql);

            if ($resultado -> num_rows > 0) {
                while($row = $resultado->fetch_assoc()) {
                    $imagen = $row["imagen"];
                }
            }
            unlink("images/" . $imagen);
            //  Fin borrar imagen
        
            $sql = "DELETE FROM peliculas WHERE id=$id";

            if ($conexion -> query($sql) === TRUE) {

                //unlink("images/" . filename);
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        }
    }
?>