<h1>Estructura For</h1>

<ul>
<?php
    /*for ($i = 1; $i <= 10; $i++) {
        echo "<li>$i</li>";
    }*/

    /*
        Mediante for mostrar la secuencia:
        5, 10, 15... hasta 50
    */

    /*
    for ($i = 5; $i <= 50; $i++) {
        if ($i % 5 == 0) {
            echo "<li>$i</li>";
        }
    }
    */

    for ($i = 5; $i <= 50; $i+=5) {
        echo "<li>$i</li>";
    }

    /*
    Generar dos números aleatorios:
    - uno entre 1 y 10
    - otro entre 11 y 20

    Crear un bucle for que se ejecute entre el 
    primer número y el segundo

    a = 4
    b = 12

    Resultado:
    4
    5
    6
    7
    ...
    12
    */
?>
</ul>

<br><br>

<ul>
<?php
    $a = rand(1,10);
    $b = rand(11,20);
    echo "<p>A = $a</p>";
    echo "<p>B = $b</p>";

    for ($i = $a; $i <= $b; $i++) {
        echo "<li>$i</li>";
    }
?>
</ul>