<form action="" method="post" class="was-validated" enctype="multipart/form-data">
    <label for="titulo">Título</label>
    <div class="form-group mb-3">
        <input type="text" name="titulo" class="form-control" id="titulo" aria-describedby="emailHelp" placeholder="Introduzca el título" required>
    </div>
    <label for="imagen" class="form-label">Imagen</label>
    <div class="input-group mb-3">
        <input type="file" name="imagen" class="form-control" id="imagen" aria-describedby="emailHelp" placeholder="Introduzca el título" required>
    </div>
    <label for="fecha_estreno">Fecha de estreno</label>
    <div class="form-group mb-3">
        <input type="date" name="fecha_estreno" class="form-control" id="fecha_estreno" required>
        <input type='hidden' name='accion' value='insertar'>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["accion"] == "insertar") {
        //  se puede poner if ($_POST) y fin
        $titulo = $_POST["titulo"];
        $fecha_estreno = $_POST["fecha_estreno"];

        $filename = $_FILES["imagen"]["name"];
        $tempname = $_FILES["imagen"]["tmp_name"];
        $folder = "./images/" . $filename;
        echo "<p>$filename</p>";
        echo "<p>$tempname</p>";

        $sql = "INSERT INTO peliculas (titulo, imagen, fecha_estreno)
                    VALUES ('$titulo', '$filename', '$fecha_estreno')";

        if ($conexion -> query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion -> error;
        }

        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>  Image uploaded successfully!</h3>";
        } else {
            echo "<h3>  Failed to upload image!</h3>";
        }
    }
?>  