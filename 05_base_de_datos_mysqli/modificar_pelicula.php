<?php
    require 'util/database.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $titulo = $fecha_estreno = ''; 

        if($_POST["accion"] == "modificar") {
            $id = $_POST["id"];

            $sql = "SELECT * FROM peliculas WHERE id=$id";
            $resultado = $conexion -> query($sql);

            if ($resultado -> num_rows > 0) {
                while($row = $resultado->fetch_assoc()) {
                    $titulo = $row["titulo"];
                    $fecha_estreno = $row["fecha_estreno"];
                    $imagen = $row["imagen"];
                }
            }
        }

        if($_POST["accion"] == "actualizar") {
            $id = $_POST["id"];
            $titulo = $_POST["titulo"];
            $fecha_estreno = $_POST["fecha_estreno"];

            $sql = "UPDATE peliculas SET titulo = '$titulo', fecha_estreno = '$fecha_estreno' WHERE id = $id";

            if ($conexion -> query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conexion -> error;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Modificar película</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    <div class="container pt-5">
        <div class="row">
            <div class="col-6">
            <h2>Modificar película</h2>
                <form class="was-validated" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" accept-charset="utf-8">
                    <label for="titulo">Título</label>
                    <div class="form-group mb-3">
                        <input type="text" name="titulo" value="<?php echo $titulo ?>" class="form-control" id="titulo" aria-describedby="emailHelp" required>
                    </div>
                    <label for="fecha_estreno">Fecha de estreno</label>
                    <div class="form-group mb-3">
                        <input type="date" name="fecha_estreno" value="<?php echo $fecha_estreno ?>" class="form-control" id="fecha_estreno" required>
                        <input type='hidden' name='accion' value='insertar'>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="hidden" name="accion" value="actualizar">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="index.php" class="btn btn-secondary" role="button">Volver</a>
                </form>
            </div>
            <div class="col-6">
                <img width="400" height="600" src="./images/<?php echo $imagen ?>" alt="Imagen" class="img-thumbnail">
            </div>
        </div>
    </div>
</body>
</html>
