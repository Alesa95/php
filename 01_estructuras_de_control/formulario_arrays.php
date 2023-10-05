<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Array</title>
</head>
<body>
    <?php
    $animes = [
        ["Me enamoré de la villana", 12, "Fantasía"],
        ["16-bit sensation: Another layer", 13, "Comedia"],
        ["Frieren", 24, "Fantasía"]
    ];
    ?>

    <h1>Animes de la temporada</h1>

    <h2>Insertar anime</h2>
    <form action="" method="post">
        <label for="titulo">Título</label><br>
        <input type="text" id="titulo" name="titulo"><br><br>
        <label for="capitulos">Capítulos</label><br>
        <input type="text" id="capitulos" name="capitulos"><br><br>
        <label for="genero">Género</label><br>
        <input type="text" id="genero" name="genero"><br><br>
        <input type="hidden" name="formulario" value="Insertar">
        <input type="submit" value="Insertar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["formulario"] == "Insertar") {
        $f_titulo = $_POST["titulo"];
        $f_capitulos = (int) $_POST["capitulos"];
        $f_genero = $_POST["genero"];

        $nuevo_anime = [$f_titulo, $f_capitulos, $f_genero];
        array_push($animes, $nuevo_anime);

    } else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["formulario"] == "Borrar") {
        $f_indice = (int) $_POST["indice"];
        unset($animes[$f_indice]);
    }
    ?>

    <h2>Lista de animes</h2>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Capítulos</th>
                <th>Género</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($animes as $indice => $anime) {
                list($titulo, $capitulos, $genero) = $anime;
                echo "<tr>";
                echo "<td>$titulo</td>";
                echo "<td>$capitulos</td>";
                echo "<td>$genero</td>";
                ?>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="formulario" value="Borrar">
                        <input type="hidden" name="indice" value="<?php echo $indice  ?>">
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
                <?php
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>