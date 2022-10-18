<link rel="stylesheet" href="styles.css"> 

<?php

    require 'database.php';

    require 'validate_user.php';

    session_start();

    /*
        COMPROBAMOS SI EL USUARIO HA INICIADO LA SESIÓN, Y SI ES ASÍ
        LE REDIRIGIMOS A LA PANTALLA PRINCIPAL
    */
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: welcome.php");
        exit;
    }

    if ($nombre != "" && $contrasena != "") {
        echo "$contrasena";
        
        $stmt = $dbh -> prepare("SELECT nombre, contrasena 
                FROM usuarios 
                WHERE (nombre=:nombre)"); 
        $stmt -> execute(array(':nombre'=>$nombre));
        $stmt -> execute();
        $count= $stmt -> rowCount();

        while ($row = $stmt -> fetch()){
            $hash_contrasena = $row["contrasena"];
        }

        if ($count == 1) {
            $auth = password_verify($_POST["contrasena"], $hash_contrasena);
            if ($auth) {
                session_start();
                $_SESSION["usuario"] = $nombre;
                //echo "Has iniciado sesión como {$_SESSION["usuario"]}";
                header("location: index.php");
                exit;
            } else {
                echo "Contraseña incorrecta";
            }
        } else {
            echo "No hay ningún usuario llamado $nombre";
        }

    }

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" accept-charset="utf-8">
    Nombre: <input type="text" name="nombre">
    <span class="error">* <?php echo $err_nombre;?></span>
    <br><br>
    Email: <input type="text" name="email">
    <span class="error">* <?php echo $err_email;?></span>
    <br><br>
    Contraseña: <input type="password" name="contrasena">
    <span class="error">* <?php echo $err_contrasena;?></span>
    <br><br>
    <input type="submit" value="Enviar">
</form>