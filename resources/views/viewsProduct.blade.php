<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>PHP views<3</title>
    </head>
    <body>
    <div class="container">
      
      <h1>Vista de Productos </h1>
        @csrf
        <div class="row">
          
          <div class="col-2" align="center">
            <label for="gameName" class="form-label">Nombre Producto</label>
            
          </div>
          <div class="col-2" align="center">
            <label for="platform" class="form-label">Categoria</label>

          </div>
          <div class="col-2" align="center">
            <label for="developer" class="form-label">Sucursal(es)</label>
            
          </div>
          <div class="col-1" align="center">
            <label for="price" class="form-label">Stock</label>
            
          </div> 

          <div class="col-1" align="center">
            <label for="price" class="form-label">Precio$</label>
            
          </div>
   
        </div>
          
        <div class="row">
          <div class="col-2" align="center">
            <label for="gameName" class="form-label">Ejemplo</label>
            
          </div>
          <div class="col-2" align="center">
            <label for="platform" class="form-label">Herramienta</label>

          </div>
          <div class="col-2" align="center">
            <label for="developer" class="form-label">Puente_Alto</label>
            
          </div>
          <div class="col-1" align="center">
            <label for="price" class="form-label">8</label>
            
          </div> 

          <div class="col-1" align="center">
            <label for="price" class="form-label">$888</label>
            
          </div>
   
        </div>
        <br>
          <a class="btn btn-primary" href="{{route('products.create')}}" type="button">Agregar Producto</a><br><br>         
          <a class="btn btn-secondary" href="/" type="button">Volver a Inicio</a><br>
    </div>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 </body>
</html>