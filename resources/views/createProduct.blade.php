<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>PHP <3</title>
    </head>
  <body>
    <div class="container">
    <h1> Agregar producto a inventario </h1>
    <form action="{{route('products.store')}}" method="post">
    @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <input
                    type="text"
                    class="form-control is-valid"
                    id="nombre"
                    name="nombre"
                    value=""
                    placeholder="Nombre de producto"
                    required/><br>

                <select class="form-row" name="categoria" placeholder="Categoria">
                  <option selected value="prof">Categoria</option>
                    <option value="sujeto1">Patines</option>
                    <option value="sujeto2">Repuestos</option>
                    <option value="sujeto2">Seguridad</option>
                    <option value="sujeto3">Herramientas</option>
                </select><br><br>
                  
                  <select class="form-row" name="sucursal" placeholder="Sucursal">
                    <option selected value="prof">Sucursal</option>
                      <option value="sujeto1">puente alto</option>
                      <option value="sujeto2">la florida</option>
                      <option value="sujeto3">ñuñoa</option>
                  </select><br><br>
                  
         <input
                    type="number"
                    class="form-control is-valid"
                    id="Precio"
                    name="Precio"
                    value=""
                    placeholder="Precio del Producto ($)"
                    required/><br>
          
        <input
                    type="number"
                    class="form-control is-valid"
                    id="Stock"
                    name="Stock"
                    value=""
                    placeholder="Stock"
                    required/>

                </div>
              </div>
           <br>
              <button class="btn btn-primary" type="submit">Guardar</button>          
            </form><br>
            <a class="btn btn-secondary" href="/" type="button">Volver a Inicio</a><br>
</div>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 </body>
</html>