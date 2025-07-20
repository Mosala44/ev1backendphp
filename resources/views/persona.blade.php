<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JLA LOADING TECHONOLOGY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="alert alert-primary mt-3 text-center">
          <img src="{{$logo}}" alt="">
        </div>
        <div class="row justify-content-center align-items-center"">
            <div class="col-md-auto">
            <div class="card" style="width: 18rem;">
              <img src="{{ $personaje['img'] }}" class="card-img-top">
            </div>
            </div>
            <div class="col-6">
              <h1 class="display-3">{{$personaje["nombre"]}}</h1>
                <table class="table">
        <thead>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="table-dark">Cargo</th>
            <td>{{$personaje["cargo"]}}</td>
          </tr>
          <tr>
            <th scope="row" class="table-dark">Email</th>
            <td>{{$personaje["email"]}}</td>

          </tr>
          <tr>
            <th scope="row" class="table-dark">Ciudad</th>
            <td>{{$personaje["ciudad"]}}</td>

          </tr>
          <tr>
            <th scope="row" class="table-dark">Biografia</th>
            <td>{{$personaje["biografia"]}}</td>

          </tr>
        </tbody>
        </table>
            </div>
        </div>
        <a href="/" class="btn btn-primary">Volver</a>
        <footer><div class="alert alert-secondary mt-3 text-center">Creado por Javier Varas</div></footer>
    </div>
</body>
</html>