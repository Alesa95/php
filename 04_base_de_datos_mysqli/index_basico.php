<!DOCTYPE html>
<html>
<head>
    <title>MySQLi - Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <?php
        require 'database.php';
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Listado de películas</h1>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <!--<form action="" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Título</label>
            <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduzca el título">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Fecha de estreno</label>
            <input type="date" name="fecha_estreno" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>-->
    <?php 
        require 'insertar_pelicula.php'; 
    ?>
    <br>
    <?php
        $sql = "SELECT * FROM peliculas";
        $resultado = $conexion -> query($sql);
        
        if ($resultado -> num_rows > 0) {
          // output data of each row
          while($row = $resultado->fetch_assoc()) {
            echo "Id: " . $row["id"]. "<br>";
            echo "Título: " . $row["titulo"]. "<br>";
            echo "Fecha de estreno: " . $row["fecha_estreno"]. "<br><br>";
          }
        } else {
            echo "No se han encontrado películas";
        }      
    ?>
</body>
</html>

<?php
    /*if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //  se puede poner if ($_POST) y fin
        $titulo = $_POST["titulo"];
        $fecha_estreno = $_POST["fecha_estreno"];
        $sql = "INSERT INTO peliculas (titulo, fecha_estreno)
                    VALUES ('$titulo', '$fecha_estreno')";

        if ($conexion -> query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion -> error;
        }
    }*/
?>  