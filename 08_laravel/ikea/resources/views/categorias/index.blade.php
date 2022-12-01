<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorías</title>
</head>
<body>
    <h1>Index de categorías</h1>

    <ul>
    @foreach($categorias as $categoria)
        <li>{{ $categoria -> nombre }}</li>
        <ul>
            @php
               $productos = $categoria -> productos
            @endphp
            @foreach($productos as $producto)
                <li>{{ $producto -> nombre }}</li>
            @endforeach
        </ul>
    @endforeach
    </ul>
</body>
</html>