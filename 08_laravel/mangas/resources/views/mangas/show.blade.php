<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $manga -> titulo }}</title>
    <!-- Bootstrap 5.2.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JQuery 3.6.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> 
</head>
<body onload="checkMode();">
    <div class="container">
        @include('header')

        <br><br

        <div class="row">
            <div class="col-9">
                <div class="card text-center">
                    <div class="card-header">
                        Mostrando la info de {{ $manga -> titulo }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Títutlo: {{ $manga -> titulo }}</h5>
                        <br>
                        <p class="card-text">Autor/a: {{ $manga -> autor }}</p>
                        <p class="card-text">Editorial: {{ $manga -> editorial }}</p>
                        <a href="#" class="btn btn-primary">Editar</a>
                    </div>
                    <div class="card-footer text-muted">
                        Editado por última vez el {{ $manga -> updated_at }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>