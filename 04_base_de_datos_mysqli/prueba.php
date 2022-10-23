<?php   
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<li>";
        for ($j = 1; $j <= 10; $j++) {
            echo "$j ";
        }
        echo "</li>";
    }
    echo "</ul>";

    $dia = 2;

    $a = match ($dia) {
        1 => "a",
        2 => "b",
        3 => "c"
    };

    echo $a;
?>