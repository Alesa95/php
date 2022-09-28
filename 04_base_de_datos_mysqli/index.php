<!DOCTYPE html>
<html>
<head>
    <title>MySQLi - Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <?php
        require 'database.php';
        require 'borrar_pelicula.php';
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Listado de películas</h1>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <?php 
        require 'insertar_pelicula.php'; 
    ?>
    <br>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Título</th>
                <th scope="col">Fecha de estreno</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM peliculas";
            $resultado = $conexion -> query($sql);
            
            if ($resultado -> num_rows > 0) {
            // output data of each row
            while($row = $resultado->fetch_assoc()) {
                $id = $row["id"];
                echo "<tr>";
                echo "<td>" . $row["id"]. "</td>";
                echo "<td>" . $row["titulo"]. "</td>";
                echo "<td>" . $row["fecha_estreno"]. "</td>";
                echo "<form method='POST' action=''>";
                echo "<input type='hidden' name='id' value=$id>";
                echo "<input type='hidden' name='accion' value='borrar'>";
                echo "<td><input type='submit' name='borrar' value='Borrar'></td>";
                echo "</form>";
                echo "<form method='POST' action='modificar_pelicula.php'>";
                echo "<input type='hidden' name='id' value=$id>";
                echo "<input type='hidden' name='accion' value='modificar'>";
                echo "<td><input type='submit' name='modificar' value='Modificar'></td>";
                echo "</form>";
                echo "</tr>";
            }
            } else {
                echo "No se han encontrado películas";
            }      
        ?>
        </tbody>
    </table>
</body>
</html>