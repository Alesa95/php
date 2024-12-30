<?php 
    $servidor = 'localhost';
    $usuario = 'alejandra';
    $contrasena = 'alejandra';
    $base_datos = 'animes_bd';

    /*$conexion = new Mysqli($servidor, $usuario, $contrasena, $base_datos) 
        or die("Error en la conexión");*/
    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $contrasena);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
?>