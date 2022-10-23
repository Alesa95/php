<!DOCTYPE html>
<html>
<head>
    <title>MySQLi - Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <?php
        require 'util/database.php';
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
        <thead class="table-dark">
            <tr>
                <th scope="col">Título</th>
                <th scope="col">Imagen</th>
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
                $titulo = $row["titulo"];
                $imagen = $row["imagen"];
                $fecha_estreno = $row["fecha_estreno"];
                ?>
                <tr>
                <td><?php echo $titulo ?></td>
                <td>
                    <img width="60" height="100" src="./images/<?php echo $row['imagen']; ?>">
                </td>
                
                <td><?php echo $fecha_estreno ?></td>
                <form method='POST' action=''>
                <input type='hidden' name='id' value=<?php echo $id ?>>
                <input type='hidden' name='accion' value='borrar'>
                <td><input type='submit' name='borrar' value='Borrar' class='btn btn-primary'></td>
                </form>
                <form method='DELETE' action='modificar_pelicula.php'>
                <input type='hidden' name='id' value=<?php echo $id ?>>
                <input type='hidden' name='accion' value='modificar'>
                <td><input type='submit' name='modificar' value='Modificar' class='btn btn-primary'></td>
                </form>
                </tr>
            <?php
            }
            } else {
                echo "No se han encontrado películas";
            }      
        ?>
        </tbody>
    </table>
</body>
</html>