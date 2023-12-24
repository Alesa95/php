<!--<link rel="stylesheet" href="styles.css">-->

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        /*  Este método llama al fichero validar_usuario.php y lo incluye 
            para que podamos emplear todas las variables y métodos que 
            hayamos programado
        */  
        //require 'validate_user.php';

        /*  Este método llama al fichero base_de_datos.php y lo incluye 
            para que podamos utilizar la conexión a la base de datos
        */  
        require 'database.php';

        //  Si el nombre y el apellido son correctos, los mostramos por pantalla y creamos el usuario en la base de datos
        if (isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["contrasena"])) {
            $nombre = $_POST["nombre"];
            $email = $_POST["email"];
            $contrasena = $_POST["contrasena"];
            $hash_contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
            echo "<br>";
            echo "<h2>El nombre es $nombre</h2>";
            echo "<h2>El email es $email</h2>";
            echo "<h2>El hash de la contraseña es $hash_contrasena</h2>";
            echo "<br>";

            $sql = "INSERT INTO usuarios (nombre, email, contrasena)
                        VALUES ('$nombre', '$email', '$hash_contrasena')";

            if ($conexion -> query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conexion -> error;
            }
        }
    }
    
?>
<h1>Registrarse</h1>
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