<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if($_POST["accion"] == "borrar") {
            $id = $_POST["id"];
        
            $sql = "DELETE FROM peliculas WHERE id=$id";

            if ($conexion -> query($sql) === TRUE) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        }
    }
?>