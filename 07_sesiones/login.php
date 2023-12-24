<!--<link rel="stylesheet" href="styles.css">-->

<?php

    require 'database.php';

    //require 'validate_user.php';

    session_start();

    /*
        COMPROBAMOS SI EL USUARIO HA INICIADO LA SESIÓN, Y SI ES ASÍ
        LE REDIRIGIMOS A LA PANTALLA PRINCIPAL
    */
    /*if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: index.php");
        exit;
    }*/

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["nombre"]) && isset($_POST["contrasena"])) {

            $nombre = $_POST["nombre"];
            $contrasena = $_POST["contrasena"];
    
            $sql = "SELECT nombre, contrasena FROM usuarios WHERE nombre='$nombre'";
            $resultado = $conexion -> query($sql);

            echo "<p>$nombre</p>";
            echo "<p>$contrasena</p>";

            var_dump($resultado);
            echo "<p>". $resultado -> num_rows ."</p>";
    
            if ($resultado != false && $resultado -> num_rows > 0) {
                echo "<p>Estamos aquí</p>";
                while($row = $resultado -> fetch_assoc()) {
                    $hash_contrasena = $row["contrasena"];
                }
                $auth = password_verify($contrasena, $hash_contrasena);
                var_dump($auth);
                if ($auth) {
                    echo "<p>Autenticación correcta</p>";
                    session_start();
                    $_SESSION["usuario"] = $nombre;
                    echo "Has iniciado sesión como {$_SESSION["usuario"]}";
                    header("location: index.php");
                    exit;
                } else {
                    echo "Contraseña incorrecta";
                }
            } /*else {
                echo "No hay ningún usuario llamado $nombre";
            }*/
        }
    }

?>

<h1>Iniciar sesión</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" accept-charset="utf-8">
    Nombre: <input type="text" name="nombre">
    <span class="error">* <?php if (isset($err_nombre)) echo $err_nombre;?></span>
    <br><br>
    Email: <input type="text" name="email">
    <span class="error">* <?php if (isset($err_email)) echo $err_email;?></span>
    <br><br>
    Contraseña: <input type="password" name="contrasena">
    <span class="error">* <?php if (isset($err_contrasena)) echo $err_contrasena;?></span>
    <br><br>
    <input type="submit" value="Enviar">
</form>