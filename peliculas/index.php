<?php
    require 'database.php';
?>

<h2>Listado de películas</h2>
<table>
    <tr>
        <th>Título</th>
        <th>Fecha de estreno</th>
    </tr>
    <?php
        $peliculas = [];
        /* 
            Sentencia para realizar la consulta de todas las películas
            de la base de datos. 
        */
        //  FETCH_ASSOC
        $stmt = $dbh->prepare("SELECT * FROM peliculas");
        //  Especificamos el fetch mode antes de llamar a fetch()
        $stmt -> setFetchMode(PDO::FETCH_ASSOC);
        //  Ejecutamos
        $stmt -> execute();
        //  Guardamos las películas obtenidas de la BD en un array multidimensional
        while ($row = $stmt -> fetch()){
            $pelicula = [$row["titulo"], $row["fecha_estreno"]];
            array_push($peliculas, $pelicula);
        }
        //  Mostramos el contenido del array donde hemos guardado las películas
        foreach ($peliculas as $pelicula) {
            list($titulo, $fecha_estreno) = $pelicula;
            echo "<tr>";
            echo "<td>$titulo</td>";
            echo "<td>$fecha_estreno</td>";
            echo "</tr>";
        }
    ?>
</table>
