<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InnovaScientific - Test</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Innova</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item {{Route::currentRouteName() == 'productos.index' ? 'active' : ''}} ">
              <a class="nav-link " href="{{route('productos.index')}}">Productos</a>
            </li>
            <li class="nav-item {{Route::currentRouteName() == 'categorias.index' ? 'active' : ''}}">
              <a class="nav-link" href="{{route('categorias.index')}}">Categorias</a>
            </li>

          </ul>
        </div>
      </nav>

        <div class="d-flex w-100 p-2 flex-column align-content-center justify-content-center">
            @yield('content')

        </div>


</body>

</html>
