<?php
    require 'database.php';
    require 'delete_movie.php';

    /*if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_POST["accion"] == "modificar") {
            header("location: edit_movie.php");
        }
    }*/
?>

<h2>Listado de películas</h2>
<form name="f" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
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
                $pelicula = [$row["id"], $row["nombre"], $row["fecha_estreno"]];
                array_push($peliculas, $pelicula);
            }
            //  Mostramos el contenido del array donde hemos guardado las películas
            foreach ($peliculas as $pelicula) {
                list($id, $nombre, $fecha_estreno) = $pelicula;
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$nombre</td>";
                echo "<td>$fecha_estreno</td>";
                echo "<form method='POST' action=''>";
                echo "<input type='hidden' name='id' value=$id>";
                echo "<input type='hidden' name='accion' value='borrar'>";
                echo "<td><input type='submit' name='borrar' value='Borrar'></td>";
                echo "</form>";
                echo "<form method='POST' action='edit_movie.php'>";
                echo "<input type='hidden' name='id' value=$id>";
                echo "<input type='hidden' name='accion' value='modificar'>";
                echo "<td><input type='submit' name='modificar' value='Modificar'></td>";
                echo "</form>";
                echo "</tr>";
            }
        ?>
    </table>
</form>