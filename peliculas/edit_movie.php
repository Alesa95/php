<?php
    require 'database.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $nombre = $fecha_estreno = ''; 

        if($_POST["accion"] == "modificar") {
            $id = $_POST["id"];
            $stmt = $dbh -> prepare("SELECT id, nombre, fecha_estreno 
                                     FROM peliculas 
                                     WHERE (id=:id)"); 
            $stmt -> execute(array(':id'=>$id));

            while ($row = $stmt -> fetch()){
                $nombre = $row["nombre"];
                $fecha_estreno = $row["fecha_estreno"];
            }
        }

        if($_POST["accion"] == "actualizar") {
            $id = $_POST["id"];
            $nombre = $_POST["nombre"];
            $fecha_estreno = $_POST["fecha_estreno"];

            $stmt = $dbh -> prepare("UPDATE peliculas
                                     SET nombre=:nombre, fecha_estreno=:fecha_estreno 
                                     WHERE (id=:id)"); 
            if ($stmt -> execute(array(':id'=>$id, ':nombre'=>$nombre, ':fecha_estreno'=>$fecha_estreno))) {
                header("location: index_resuelto.php");
            }
        }
    }

    
    
?>

<h2>Modificar película</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" accept-charset="utf-8">
    Nombre: <input type="text" name="nombre" value="<?php echo $nombre ?>"">
    <br><br>
    Fecha: <input type="date" name="fecha_estreno" value="<?php echo $fecha_estreno ?>">
    <br><br>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="hidden" name="accion" value="actualizar">
    <input type="submit" value="Actualizar">
</form>