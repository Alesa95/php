<form action="" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Título</label>
        <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduzca el título">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Fecha de estreno</label>
        <input type="date" name="fecha_estreno" class="form-control" id="exampleInputPassword1">
        <input type='hidden' name='accion' value='insertar'>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["accion"] == "insertar") {
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
    }
?>  