<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <title>PHP <3</title>
    </head>
    <body>
    @section('header')
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
            <div class="col-4">
              <a class="btn btn-success" href="/" type="button">Inicio</a>         
            </div>

            <div class="col-8" align="right">
              <button type="button" class="btn btn-dark">login</button>
              <a type="button" class="btn btn-info" href="/contact">Contactanos</a>
            </div>

            <div class="col-12" aling="center"><br>
              <h1 class="display-4"><b>Sistema de Inventario Patines</b></h1>
            </div>
          </div>
        </div>
      </div>
      
      
    @show

    <div class="container">
      <div class="row">
        <div class="col-4" align="left">
          <a class="btn btn-primary" href="{{route('products.create')}}" type="button">Agregar Producto</a>
          <a class="btn btn-success" href="{{route('products.index')}}" type="button">Vista Inventario</a>
        </div>
        <div class="col-8" align="right">
          <a class="btn btn-primary" href="{{route('stock.create')}}" type="button">Agregar Stock/Precio</a>
          <a class="btn btn-success" href="{{route('stock.index')}}" type="button">Vista Stock</a><br><br>
        </div></div>
        <hr>
        @yield('content')
    </div>

    @section('footer')
    <div class="container"><hr>
        <div class="text-right">
        <p class="text-monospace"><h3>Integrantes:</h3>
          Gerardo Martinez<br>
          Ignacio Moraga<br>
          Luis Rojas</p>
          </div>
      </div>
    @show

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>