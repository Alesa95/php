<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET" id="potencia">
        <label>Base</label>
        <input type="text" name="base">
        <br><br>
        <label>Exponente</label>
        <input type="text" name="exponente">
        <br><br>
        <input type="submit" value="Enviar"/>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $base = (int)$_POST['base'];
        $exponente = (int)$_POST['exponente'];
        $resultado = 1;

        for ($i = 1; $i <= $exponente; $i++) {
            $resultado = $base * $resultado;
        }
        echo "<p>El resultado de elevar $base a $exponente es $resultado</p>";
    }
?>
</body>
</html>