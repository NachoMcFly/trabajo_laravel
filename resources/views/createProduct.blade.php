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
</div>   

@stop