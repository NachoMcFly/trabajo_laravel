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
    <h1>Confirmación de compra </h1>
    <form action="{{route('products.store')}}" method="post">
    @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <input
                    type="number"
                    class="form-control is-valid"
                    id="Nombre"
                    name="tarjeta"
                    value=""
                    placeholder="Numero de tarjeta"
                    required/>
                 
                <div class="valid-feedback"></div>
            </div>
                <div class="col-md-6 mb-3">
                 <input
                    type="number"
                    name="cantidad"
                    class="form-control is-valid"
                    id="cantidad"
                    value=""
                    placeholder="Cantidad de productos"
                    required/>
                  
                  <div class="valid-feedback"></div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <input
                    type="text"
                    class="form-control is-valid"
                    id="direccion"
                    name="direccion"
                    value=""
                    placeholder="Dirección"
                    required/>
                  
                  <div class="valid-feedback"></div>
                </div>
                <div class="col-md-6 mb-3">
                  <input
                    type="number"
                    class="form-control is-valid"
                    id="telefono"
                    name="telefono"
                    value=""
                    placeholder="Telefono de contacto: +569"
                    required/>

                    <div class="valid-feedback"></div>
               </div>
                  <div class="col-md-6 mb-3">
                  <input
                    type="email"
                    class="form-control is-valid"
                    id="correo"
                    name="correo"
                    value=""
                    placeholder="Correo electronico"
                    required/>

                </div>
              </div>
           <br>
              <button class="btn btn-primary" type="submit">Confirmar</button>          
            </form><br>
            <a class="btn btn-success" href="/" type="button">Volver a inicio</a>
</div>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 </body>
</html>