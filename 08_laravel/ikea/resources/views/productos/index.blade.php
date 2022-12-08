<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
    <h1>Productos</h1>
    <ul>
    @foreach($productos as $producto)
        <li>{{ $producto -> nombre }} - {{ $producto -> categoria -> nombre }}</li>
        <ul>
        @foreach($producto->tiendas as $tienda)
            <li>
                {{ $tienda -> nombre }}
            </li>
        @endforeach
        </ul>
    @endforeach
    </ul>
</body>
</html>