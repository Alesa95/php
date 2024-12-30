<?php 
    $servidor = 'localhost';
    $usuario = 'alejandra';
    $contrasena = 'alejandra';
    $base_datos = 'animes_bd';

    $conexion = new Mysqli($servidor, $usuario, $contrasena, $base_datos) 
        or die("Error en la conexión");
?>