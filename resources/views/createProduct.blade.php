@extends('layouts.master')

@section('content')

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
                    placeholder="Nombre de producto"
                    required/><br>

                <select class="form-row" name="categoria" placeholder="Categoria">
                  <option selected value="categoria">Categoria</option>
                    <option value="patines">Patines</option>
                    <option value="repuestos">Repuestos</option>
                    <option value="seguridad">Seguridad</option>
                    <option value="herramientas">Herramientas</option>
                </select><br><br>
                  
                  <select class="form-row" name="sucursal" placeholder="Sucursal">
                    <option selected value="sucursal">Sucursal</option>
                      <option value="puenteAlto">Puente Alto</option>
                      <option value="laFlorida">La Florida</option>
                      <option value="nunoa">Ñuñoa</option>
                  </select><br><br>
                  
         <input
                    type="number"
                    class="form-control is-valid"
                    id="precio"
                    name="precio"
                    placeholder="Precio del Producto ($)"
                    required/><br>
          
        <input
                    type="number"
                    class="form-control is-valid"
                    id="stock"
                    name="stock"
                    placeholder="Stock"
                    required/>

                </div>
              </div>
           <br>

           @if($errors->any())
           <div class="alert alert-danger">
            <ul> 
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            </div>
            @endif
              <button class="btn btn-primary" type="submit">Guardar</button>          
            </form><br>
</div>   

@stop