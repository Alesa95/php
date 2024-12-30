<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numeros = [];
    $numerosA = [];
    $numerosB = [];

    for($i = 0; $i < 5; $i++) {
        $numerosA[$i] = rand(1,10);
        $numerosB[$i] = rand(10,100);
    }
    array_push($numeros, $numerosA, $numerosB);

    foreach($numerosA as $numeroA) {
        echo "$numeroA, ";
    }
    ?>

    <table>
        <thead>
            <tr>
                <th>Números de 1 a 10</th>
                <th>Números de 10 a 100</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($numeros as $subNumeros) {
                list($numero1, $numero2) = $subNumeros;
                echo "<tr>";
                echo "<td>$numero1</td>";
                echo "<td>$numero2</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>