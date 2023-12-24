<?php
    /*  CREAMOS LAS VARIABLES QUE UTILIZAREMOS
        UNA PARA CADA CAMPO DEL FORMULARIO, 
        Y OTRA PARA CADA ERROR DE CADA CAMPO DEL FORMULARIO */
    $nombre = $email = $contrasena = "";
    $err_nombre = $err_email = $err_contrasena = "";

    //  TODO ESTO SE EJECUTARÁ CUANDO ENVIEMOS EL FORMULARIO
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //  PRIMERO VALIDAMOS EL NOMBRE
        if(empty($_POST["nombre"])) {
            $err_nombre = "Introduzca el nombre";   
        } else {
            //  Si el campo del nombre no está vacío, validamos que el nombre siga el formato correcto
            $p = '^[a-zA-Z]+$';
            $pattern = "$p^";

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
            $p = '^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$';
            $pattern = "$p^";  

            if (!preg_match ($pattern, $_POST["email"])) {  
                //  Si llegamos aquí, el email introducido no sigue el formato de los emails
                $err_email = "El correo no es válido";  
            } else {  
                //  Si llegamos aquí, el email introducido es correcto y tenemos que "depurarlo"
                $email = depurar($_POST["email"]);
            }  
        }

        //  LUEGO VALIDAMOS LA CONTRASEÑA
        if(empty($_POST["contrasena"])) {
            $err_nombre = "Introduzca la contraseña";   
        } else {
            //  Si el campo del nombre no está vacío, validamos que el nombre siga el formato correcto
            $p = '^.{8,12}$';
            $pattern = "$p^";

            if (!preg_match($pattern, $_POST["contrasena"])) {
                //  Si llegamos aquí, el nombre introducido no sigue el formato correcto
                $err_contrasena = "La contraseña debe tener entre 8 y 12 caracteres";
            } else {
                //  Si llegamos aquí, el nombre introducido es correcto y tenemos que "depurarlo"
                $contrasena = depurar($_POST["contrasena"]);
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
?>