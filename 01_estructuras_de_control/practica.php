<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica</title>
</head>
<body>
    <?php
    $array_bidimensional = [];

    $array_1 = [];
    $array_2 = [];

    for($i = 0; $i < 10; $i++) {
        array_push($array_1, rand(1,10));
        array_push($array_2, rand(10,100));
    }
    ?>

    <table>
        <thead>
            <th>Columna 1</th>
            <th>Columna 2</th>
        </thead>
        <tbody>
            <?php
            for($i = 0; $i < 10; $i++) {
                echo "<tr><td>" . $array_1[$i] . "</td><td>" . $array_2[$i] . "</td></tr>";
            }
            ?>  
        </tbody>
    </table>
</body>
</html>