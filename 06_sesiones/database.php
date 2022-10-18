<?php 
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = '';
    $base_datos = 'videojuegos';

    $conexion = new Mysqli($servidor, $usuario, $contrasena, $base_datos) 
        or die("Error en la conexión");
?>