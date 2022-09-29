<h1>Estructura IF</h1>

<?php
    $numero = -4;

    if ($numero > 0) {
        echo "<p>El número es positivo</p>";
    } else if ($numero < 0) {
        echo "<p>El número es negativo</p>";
    } else {
        echo "<p>El número es 0</p>";
    }

    if ($numero % 2 == 0) {
        echo "<p>El número $numero es par</p>";
    } else {
        echo "<p>El número $numero es impar</p>";
    }

    /*
        Crear una variable $alumno y una variable $nota
        Mostrar por pantalla el nombre del alumno junto
        a su calificación. Su calificación será:
            - Suspenso si es menor que 5
            - Aprobado si está entre 5 y 6
            - Notable si está entre 7 y 8
            - Sobresaliente si está entre 9 y 10
    */

    $alumno = "Pepe Luis";
    $nota = -5;

    if ($nota >= 0 && $nota < 5) {
        echo "<p>$alumno ha suspendido</p>";
    } else if ($nota >= 5 && $nota < 7) {
        echo "<p>$alumno ha aprobado</p>";
    } else if ($nota >= 7 && $nota < 9) {
        echo "<p>$alumno ha sacado notable</p>";
    } else if ($nota >= 9 && $nota <= 10) {
        echo "<p>$alumno ha sacado sobresaliente</p>";
    } else {
        echo "<p>La nota no es válida</p>";
    }

    /*
        Credenciales correctas:
        $usuario = "admin"
        $contrasena = "123"

        Si $usuario y $contrasena son 
        correctos, mostrar el mensaje
        "Sesión iniciada"

        Si $usuario o $contrasena son erróneos,
        mostrar los mensajes adecuados

        Hay 3 casos
    */

    $usuario = "admin";
    $contrasena = "1234";

    if ($usuario == "admin" && $contrasena == "123") {
        echo "<p>Sesión iniciada</p>";
    } else if ($usuario == "admin" && $contrasena != "123") {
        echo "<p>Contraseña errónea</p>";
    } else {
        echo "<p>El usuario no existe</p>";
    }
?>