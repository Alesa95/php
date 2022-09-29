<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo Mysqli</title>
        <?php require 'database.php'; ?>
    </head>
    <body>
        <h1>Listado de películas</h1>

        <?php require 'insertar_pelicula.php'; ?>
        <?php require 'borrar_pelicula.php' ?>
        <br>

        <table>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Duración</th>
                <th>Fecha de estreno</th>
            </tr>
        <?php
            $sql = "SELECT * FROM peliculas";
            $resultado = $conexion -> query($sql);

            if ($resultado -> num_rows > 0) {
                while ($row = $resultado -> fetch_assoc()) {
                    $id = $row["id"];
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["titulo"] . "</td>";
                    echo "<td>" . $row["duracion"] . "</td>";
                    echo "<td>" . $row["fecha_estreno"] . "</td>";
                    echo "<td>";
                    echo "<form method='post' action='modificar_pelicula.php'>";
                    echo "<input type='hidden' name='id' value=$id>";
                    echo "<input type='hidden' name='formulario' value='modificar'>";
                    echo "<input type='submit' value='Modificar'>";
                    echo "</form>";
                    echo "</td>";
                    echo "<td>";
                    echo "<form method='post' action=''>";
                    echo "<input type='hidden' name='id' value=$id>";
                    echo "<input type='hidden' name='formulario' value='borrar'>";
                    echo "<input type='submit' value='Borrar'>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr>";
                echo "<td>No se han encontrado películas</td>";
                echo "</tr>";
            }
        ?>
        </table>
    </body>
</html>