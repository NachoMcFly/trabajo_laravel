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
        <div class="container" >
            <div class="row">
                    <div class="row">
                        <div class="col-4">
                        <button type="button" class="btn btn-dark">login</button>
                        </div>
                        <a type="button" class="btn btn-light" href="{{route('products.index')}}">Contactanos</a>
                        <div class="col-12" aling="center"><br>
                            <h1 class="display-4"><b>Carrito de compras</b></h1>
                        </div>
                    </div>
               </div>
          </div>
          <p>
            <hr>
             <p>

 <div class="row">
  <div class="card" style="width: 18rem;">
  <img src="https://cdn.shopify.com/s/files/1/1629/6545/products/1_4_1024x1024_2x_5f33b371-f676-4c1e-a1b7-deffdc3f186f_1024x.jpg?v=1630522669" 
             class="card-img-top" alt="..." width="190" height="210">
  <div class="card-body">
    <h5 class="card-title">Patines Seba</h5>
    <p class="card-text">Catalogados como la mejor marca de patines profesionales.</p>
    <a class="btn btn-success" href="/viewsProduct" type="button">vistas</a>
  </div>
</div>



<div class="card" style="width: 18rem;">
<img src="https://cdn.shopify.com/s/files/1/1629/6545/products/IMG_0016_1_1x1_1_1200_x_1200_500x.jpg?v=1628525938" 
             class="card-img-top" alt="..." width="190" height="210">
  <div class="card-body">
    <h5 class="card-title">Patines hook</h5>
    <p class="card-text">Patins semi profesionales, ideales para aprender.</p>
    <a class="btn btn-success" href="{{route('products.create')}}" type="button">Comprar</a>
  </div>
</div>



<div class="card" style="width: 18rem;">
<img src="https://cdn.shopify.com/s/files/1/1629/6545/products/HD_INLINENEGRO_3_500x.jpg?v=1604279254" 
             class="card-img-top" alt="..." width="190" height="210">
  <div class="card-body">
    <h5 class="card-title">Flying Eagle</h5>
    <p class="card-text">Patines profesionales pre rockeables.</p>
    <a class="btn btn-success" href="{{route('products.create')}}" type="button">Comprar</a>
  </div>
</div>

</div>


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