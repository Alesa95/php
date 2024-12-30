<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animes</title>
</head>
<body>
    <form action="" method="post">
        <label>Título</label>
        <input type="text" name="titulo"><br><br>
        <label>Género</label>
        <select name="genero">
            <option value="" selected disabled hidden>Selecciona consola</option>
            <option value="accion">Acción</option>
            <option value="romance">Romance</option>
            <option value="comedia">Comedia</option>
        </select><br><br>
        <label>Fecha de lanzamiento</label>
        <input type="date" name="lanzamiento"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $tmp_titulo = $_POST["titulo"];
        if(isset($_POST["genero"])) $tmp_genero = $_POST["genero"];
        else $tmp_genero = "";
        $tmp_lanzamiento = $_POST["lanzamiento"];

        //  Escribe tu código a continuación...
        
    }
    ?>
</body>
</html>