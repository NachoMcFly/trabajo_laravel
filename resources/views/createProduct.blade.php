<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="resources/css/style.css">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
                    required/>
                 
                    <div class='col-12'><br>


        <select class="form-row" name="categoria" placeholder="Categoria">
           <option selected value="prof">Categoria</option>
            <option value="sujeto1">patines</option>
             <option value="sujeto2">seguridad</option>
               <option value="sujeto3">herramienta</option>
                </select>

                <div class='col-12'><br>
                  
                <select class="form-row" name="sucursal" placeholder="Sucursal">
           <option selected value="prof">Sucursal</option>
            <option value="sujeto1">puente alto</option>
             <option value="sujeto2">la florida</option>
               <option value="sujeto3">ñuñoa</option>
                </select>
                  
          

                </div>
              </div>
           <br>
              <button class="btn btn-primary" type="submit">Guardar</button>          
            </form><br><br>
            <a class="btn btn-secondary" href="/" type="button">Volver a Inicio</a><br>
</div>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 </body>
</html>