<?php
    require 'database.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $titulo = $fecha_estreno = ''; 

        if($_POST["accion"] == "modificar") {
            $id = $_POST["id"];
            $stmt = $dbh -> prepare("SELECT id, titulo, fecha_estreno 
                                     FROM peliculas 
                                     WHERE (id=:id)"); 
            $stmt -> execute(array(':id'=>$id));

            while ($row = $stmt -> fetch()){
                $titulo = $row["titulo"];
                $fecha_estreno = $row["fecha_estreno"];
            }
        }

        if($_POST["accion"] == "actualizar") {
            $id = $_POST["id"];
            $titulo = $_POST["titulo"];
            $fecha_estreno = $_POST["fecha_estreno"];

            $stmt = $dbh -> prepare("UPDATE peliculas
                                     SET titulo=:titulo, fecha_estreno=:fecha_estreno 
                                     WHERE (id=:id)"); 
            if ($stmt -> execute(array(':id'=>$id, ':titulo'=>$titulo, ':fecha_estreno'=>$fecha_estreno))) {
                header("location: index_resuelto.php");
            }
        }
    }
?>

<h2>Modificar película</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" accept-charset="utf-8">
    Titulo: <input type="text" name="titulo" value="<?php echo $titulo ?>"">
    <br><br>
    Fecha: <input type="date" name="fecha_estreno" value="<?php echo $fecha_estreno ?>">
    <br><br>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="hidden" name="accion" value="actualizar">
    <input type="submit" value="Actualizar">
</form>