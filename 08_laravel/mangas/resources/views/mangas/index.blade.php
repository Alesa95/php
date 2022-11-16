<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>{{ $mensaje }}</h1>

        @foreach ($mangas as $manga)
            <p>{{ $manga }}</p>
        @endforeach

        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor/a</th>
                    <th>Editorial</th>
                </tr>
                @foreach ($mangas2 as $manga)
                    <tr>
                        <td>{{ $manga[0] }} </td>
                        <td>{{ $manga[1] }} </td>
                        <td>{{ $manga[2] }} </td>
                    </tr>
                @endforeach
            </thead>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>