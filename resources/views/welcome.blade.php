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
            <div class="row">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-4">
                            <img src="https://ciisa.cl/wp-content/uploads/2018/01/Logo-Ciisa-Sitio.png" width="300" height="180">
                        </div>
                        <div class="col-8"><br>
                            <h1 class="display-4"><b>Trabajo de Framework y Programacion Web</b></h1>
                        </div>
                        <div class="col-12" align="center" >
                            <p class="lead">Formulario para EVA1</p>
                            <hr class="my-4">
                        </div>
                        <div>
                            <p>AAAAND it's gone.</p>
                            <a class="btn btn-primary" href="https://www.southpark.lat/news/zi5uql/aannnd-it-s-gone" role="button">se va</a><br><br>
                            <a class="btn btn-danger" href="https://github.com/NachoMcFly/trabajo_laravel" role="button">Repositorio</a><br><br>
                            <a class="btn btn-success" href="{{route('products.create')}}" type="button">Formulario</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-12">

                Instrucciones:<br>

​               Diseñar un software gestión de stock. <br>


            ·        Registrar un producto con los siguientes datos, id auto incrementable, código único del producto, 
            nombre del producto, categoría, sucursal en la que se encuentra, y descripción, cantidad, y precio venta. <br>

            ·        Asignar productos a sucursal. (Defina 3 sucursales.) <br>

            ·        Consultar productos por código, nombre, y opcionalmente la sucursal. <br>

            ·        Dar de baja un producto. (Con la opción de eliminar el producto). <br>

            ·        Actualizar nombre, precio y descripción del producto. <br>

            ·        Crear un login para administrador del sistema. <br><br>

 

            Se solicita:<br>

            ·        Diseñe un estilo visual o utilice una plantilla Bootstrap que se ajuste a los requerimientos. <br>

            ·        Valide los campos obligatorios de las vistas y envíelos a una clase PHP la cual mostrará los datos por pantalla. <br>

                </div> 

                <div class='col-12'><br><br>

                    Integrantes :
                    <select class="form-control col-6" id="selector_ahorro">
                        <option selected value="prof">Profesor: Victor Cofre</option>
                        <option value="sujeto1">Gerardo Martinez</option>
                        <option value="sujeto2">Luis Rojas</option>
                        <option value="sujeto3">Ignacio Moraga</option>
                    </select>

                    <br><br>
                    

                </div>
            </div>
        </div>
        <br><br><br>




        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        -->
    </body>
</html>