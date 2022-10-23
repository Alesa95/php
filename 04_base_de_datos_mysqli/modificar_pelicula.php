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

<h2>Modificar película</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" accept-charset="utf-8">
    Titulo: <input type="text" name="titulo" value="<?php echo $titulo ?>">
    <br><br>
    Fecha: <input type="date" name="fecha_estreno" value="<?php echo $fecha_estreno ?>">
    <br><br>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="hidden" name="accion" value="actualizar">
    <input type="submit" value="Actualizar">
</form>