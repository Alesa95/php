<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $base = (int)$_POST['base'];
    $exponente = (int)$_POST['exponente'];
    $resultado = 1;

    for ($i = 1; $i <= $exponente; $i++) {
        $resultado = $base * $resultado;
    }
    echo "<p>El resultado de elevar $base a $exponente es $resultado</p>";
}
?>
