<form action ="" method="post">
    <label>Título</label>
    <input type="text" name="titulo"><br><br>
    <label>Duración</label>
    <input type="text" name="duracion"><br><br>
    <label>Fecha de estreno</label>
    <input type="date" name="fecha_estreno"><br><br>
    <input type="hidden" name="formulario" value="insertar">
    <input type="submit" value="Insertar película">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && 
            $_POST["formulario"] == "insertar") {
        $titulo = $_POST["titulo"];
        $duracion = $_POST["duracion"];
        $fecha_estreno = $_POST["fecha_estreno"];

        $sql = "INSERT INTO peliculas (titulo, duracion, fecha_estreno)
            VALUES ('$titulo', '$duracion', '$fecha_estreno')";

        if ($conexion -> query($sql) == TRUE) {
            echo "<p>Fila insertada</p>";
        } else {
            echo "<p>Error al insertar</p>";
        }
    }
?>