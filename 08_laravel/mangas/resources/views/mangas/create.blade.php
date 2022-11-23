<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Manga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <form method="post" action="{{route('mangas.store')}}">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label">Título</label>
                        <input class="form-control" type="text" name="titulo">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Autor/a</label>
                        <input class="form-control" type="text" name="autor">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Editorial</label>
                        <select class="form-select" name="editorial">
                            <option value="Planeta Cómic">Planeta Cómic</option>
                            <option value="Norma Editorial">Norma Editorial</option>
                            <option value="Arechi Manga">Arechi Manga</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Crear</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>