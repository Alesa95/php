<?php

    session_start();
    // Eliminar el nombre de usuario:
    //unset($_SESSION["usuario"]);
    session_destroy();
    header("location: login.php");
    exit;

?>