<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && 
            $_POST["formulario"] == "insertar") {

        //  Validamos el título
        if (strlen($_POST["titulo"]) > 0) {
            $err_titulo = "*El título es obligatorio";
        } else {
            $temp_titulo = $_POST["titulo"];

            if (strlen($temp_titulo) > 40) {
                $err_titulo = "*El título debe tener menos de 40 caracteres";
            } else {
                $titulo = $temp_titulo;
            }
        }
        //  Validamos la duración
        if (strlen($_POST["duracion"]) > 0) {
            $err_duracion = "*La duración es obligatoria";
        } else {
            $temp_duracion = $_POST["duracion"];
            $temp_duracion = filter_var($temp_duracion, FILTER_VALIDATE_INT);
            
            if (!$temp_duracion) {
                $err_duracion = "*La duración debe ser un número";
            } else {
                if ($temp_duracion <= 0) {
                    $err_duracion = "*La duración debe ser mayor que cero";
                } else {
                    $duracion = $_POST["duracion"];
                }
            }
        }
        //  Validamos la fecha de estreno
        if (strlen($_POST["fecha_estreno"]) > 0) {
            $err_fecha_estreno = "*La fecha de estreno es obligatoria";
        } else {
            $fecha_estreno = $_POST["fecha_estreno"];
        }

        if (isset($titulo) && isset($duracion) && isset($fecha_estreno)) {

            $sql = "INSERT INTO peliculas (titulo, duracion, fecha_estreno)
            VALUES ('$titulo', '$duracion', '$fecha_estreno')";

            if ($conexion -> query($sql) == TRUE) {
                echo "<p>Fila insertada</p>";
            } else {
                echo "<p>Error al insertar</p>";
            }
        }
    }
?>

<form action ="" method="post">
    <label>Título</label>
    <input type="text" name="titulo">
    <?php if (isset($err_titulo)) echo $err_titulo; ?>
    <br><br>
    <label>Duración</label>
    <input type="text" name="duracion">
    <?php if (isset($err_duracion)) echo $err_duracion; ?>
    <br><br>
    <label>Fecha de estreno</label>
    <input type="date" name="fecha_estreno">
    <?php if (isset($err_fecha_estreno)) echo $err_fecha_estreno; ?>
    <br><br>
    <input type="hidden" name="formulario" value="insertar">
    <input type="submit" value="Insertar película">
</form>

