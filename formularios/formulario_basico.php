<?php
    /*  CREAMOS LAS VARIABLES QUE UTILIZAREMOS
        UNA PARA CADA CAMPO DEL FORMULARIO, 
        Y OTRA PARA CADA ERROR DE CADA CAMPO DEL FORMULARIO */
    $nombre = $email = "";
    $err_nombre = $err_email = "";

    //  TODO ESTO SE EJECUTARÁ CUANDO ENVIEMOS EL FORMULARIO
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //  PRIMERO VALIDAMOS EL NOMBRE
        if(empty($_POST["nombre"])) {
            $err_nombre = "Introduzca el nombre";   
        } else {
            //  Si el campo del nombre no está vacío, validamos que el nombre siga el formato correcto
            $pattern = "^[a-zA-Z]+$^";

            if (!preg_match($pattern, $_POST["nombre"])) {
                //  Si llegamos aquí, el nombre introducido no sigue el formato correcto
                $err_nombre = "El nombre no es correcto";
            } else {
                //  Si llegamos aquí, el nombre introducido es correcto y tenemos que "depurarlo"
                $nombre = depurar($_POST["nombre"]);
            }
        }

        //  LUEGO VALIDAMOS EL EMAIL
        if(empty($_POST["email"])) {
            $err_email = "Introduzca el email"; 
        } else {
            //  Si el campo del email no está vacío, validamos que siga el formato de los emails
            $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  

            if (!preg_match ($pattern, $_POST["email"])) {  
                //  Si llegamos aquí, el email introducido no sigue el formato de los emails
                $err_email = "El correo no es válido";  
            } else {  
                //  Si llegamos aquí, el email introducido es correcto y tenemos que "depurarlo"
                $email = depurar($_POST["email"]);
            }  
        }
    }

    //  FUNCIÓN PARA DEPURAR LOS DATOS
    function depurar($dato) {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }

    //  Si el nombre y el apellido son correctos, los mostramos por pantalla
    if ($nombre != "" && $email != "") {
        echo "<br>";
        echo "<h2>El nombre es $nombre</h2>";
        echo "<h2>El email es $email</h2>";
        echo "<br>";
    }
?>

<h1>Hola mundo!</h1>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" accept-charset="utf-8">
    Nombre: <input type="text" name="nombre">
    <span class="error">* <?php echo $err_nombre;?></span>
    <br><br>
    Email: <input type="text" name="email">
    <span class="error">* <?php echo $err_email;?></span>
    <br><br>
    <input type="submit" value="Enviar">
</form>