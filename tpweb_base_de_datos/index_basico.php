<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo Mysqli</title>
        <?php require 'database.php'; ?>
    </head>
    <body>
        <h1>Listado de películas</h1>

        <?php
            $sql = "SELECT * FROM peliculas";
            $resultado = $conexion -> query($sql);

            if ($resultado -> num_rows > 0) {
                while ($row = $resultado -> fetch_assoc()) {
                    echo "Id: " . $row["id"] . "<br>";
                    echo "Título: " . $row["titulo"] . "<br>";
                    echo "Duración: " . $row["duracion"] . "<br>";
                    echo "Fecha de estreno: " . $row["fecha_estreno"] . "<br><br>";
                }
            } else {
                echo "No se han encontrado películas";
            }
        ?>
    </body>
</html>