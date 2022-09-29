<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = '';
    $base_datos = 'db_peliculas';

    $conexion = new Mysqli($servidor, $usuario, $contrasena, $base_datos)
        or die("Error de conexión");
?>