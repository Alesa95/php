<?php
class Conexion {
    public $servidor;
    private $usuario;
    private $contrasena;
    private $base_datos;
    public $conexion;

    function __construct($servidor, $usuario, $contrasena, $base_datos) {
        $this -> servidor = $servidor;
        $this -> usuario = $usuario;
        $this -> contrasena = $contrasena;
        $this -> base_datos = $base_datos;
        $this -> conexion = new Mysqli($servidor, $usuario, $contrasena, $base_datos) 
            or die("Error en la conexión");
    }

    function closeConection() {
        $conexion -> close();
    }
}
?>