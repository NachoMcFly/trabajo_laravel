@extends('layouts.master')

@section('content')

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
    </div>   

@stop