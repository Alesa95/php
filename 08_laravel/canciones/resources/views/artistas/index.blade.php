<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artistas</title>
</head>
<body>
    <ul>
        @foreach($artistas as $artista)
            <li>{{ $artista -> nombre }}</li>
            @php
                $canciones = $artista -> canciones;
            @endphp
            <ul>
                @foreach($canciones as $cancion)
                    <li>{{ $cancion -> titulo_cancion }}</li>
                @endforeach 
            </ul>
        @endforeach
    </ul>
</body>
</html>