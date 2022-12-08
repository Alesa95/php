<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Tienda</title>
</head>
<body>
    <h1>{{ $tienda -> nombre }}</h1>
    <h2>Productos:</h2>
    <ul>
    @foreach($tienda -> productos as $producto)
        <li>{{ $producto -> nombre }}</li>
    @endforeach
    </ul>
</body>
</html>