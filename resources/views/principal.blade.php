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
    <div class="container mt-4">
        <div class="alert alert-primary text-center">
        <img src="{{ $logo }}">
        </div>
        <div class="row justify-content-center">
          @foreach ($data as $key => $d)
            <div class="col-md-4 d-flex justify-content-center mb-4">
              <div class="card text-bg-dark h-100" style="width: 18rem;">
                  <img src="{{$d['img']}}" class="card-img-top" alt="...">
                  <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{$d['nombre']}}</h5>
                    <p class="card-text">{{$d['cargo']}}</p>
                    <a href="/persona/{{$key}}" class="btn btn-primary">Mas Información</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
        </div>
        <br>
        <div class="container">
          <div class="row mt-2">
            <div class="col">
                <h2>PROYECTOS</h2>
                <span>a continuacion se mostrara un listado de proyectos y partners de JLU Corporations</span>
                <br>
                <a href="/proyectos" class="btn btn-primary">CLICK PARA VER PROYECTOS</a>
            </div>
        </div>
        <footer><div class="alert alert-secondary mt-3 text-center">Creado por Javier Varas</div></footer>
    </div>
  </div>
</body>
</html>