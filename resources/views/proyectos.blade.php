<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="alert alert-primary text-center mt-5">
            <img src="{{$logo}}" alt="">
        </div>
        <table class="table">
  <thead class="table table-dark">
    <tr>
      <th scope="col">CODIGO</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">DESCRIPCION</th>
    </tr>
  </thead>
  <tbody>
    @foreach($proyectos as $p)
    <tr>
      <th scope="row">{{$p['Codigo']}}</th>
      <td>{{$p['nombre']}}</td>
      <td>{{$p['descripcion']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="/" class="btn btn-primary">Volver</a>
    <footer><div class="alert alert-secondary mt-3 text-center">Creado por Javier Varas</div></footer>
    </div>
</body>
</html>