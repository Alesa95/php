<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*  
        Array con las temperaturas mínimas y máximas 
        previstas para el 29/09/23
    */
    $temperaturas = [
        ["Málaga", 20, 27],
        ["Sevilla", 17, 36],
        ["Cádiz", 19, 31],
        ["Jaén", 19, 33],
        ["Granada", 12, 35],
        ["Almería", 20, 27],
        ["Huelva", 16, 33]
    ];

    //print_r($temperaturas);

    $array = [];
    $array2 = [];
    for($i = 0; $i<10; $i++) {
        array_push($array2, rand(1,10));
    }
    $array3 = [];
    for($i = 0; $i<10; $i++) {
        array_push($array3, rand(10,100));
    }
    array_push($array, $array2, $array3);

    print_r($array);
    ?>
</body>
</html>