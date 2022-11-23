<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangas</title>
    <!-- Bootstrap 5.2.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JQuery 3.6.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> 
</head>
<body>
    <script>
        function darkMode () {
            $("table").removeClass("table")
            $("table").addClass("table table-dark");
        }
    </script>

    <div class="container">
        <h1>{{ $mensaje }}</h1>

        <a href="{{route('mangas.create')}}" class="btn btn-link">Crear manga</a>

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

        <br><br>

        <h2>Listado de mangas</h2>

        <br>

        <button class="btn btn-secondary" onclick="darkMode()">Modo Oscuro</button> 

        <br><br>

        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor/a</th>
                    <th>Editorial</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach ($mangas3 as $manga)
                    <tr>
                        <td>{{ $manga->titulo }}</td>
                        <td>{{ $manga->autor }}</td>
                        <td>{{ $manga->editorial }}</td>
                        <td>
                            <form method="get" action="{{ route('mangas.show', ['manga' => $manga -> id]) }}">
                                <button class="btn btn-primary" type="submit">Ver</button>
                            </form>
                        </td>
                        <td>
                            <form method="post" action="{{ route('mangas.destroy', ['manga' => $manga -> id]) }}">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger" type="submit">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </thead>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>