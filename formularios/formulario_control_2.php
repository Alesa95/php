<?php
    $email = validar_email(htmlspecialchars($_POST["email"]));

    function validar_email($correo) {
        if (str_contains ($correo, 'idiota')) {
            echo "El email no es valido";
        } else {
            echo "Su email es $correo";
        }
    }
?>