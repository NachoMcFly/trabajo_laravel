@extends('layouts.master')

@section('content')

    <div class="container">
      
      <h1>Vista de Productos </h1>
         <div class="row">
           @foreach($productos as $producto)
          <div class="col-3">
            <div class="card" style="width: 18rem;">
            <img src="{{ $producto->imagen }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $producto->nombre }}</5>
              <p class="card-text">{{ $producto->categoria_id }}</p>
             <p class="card-text">{{ $producto->categoria()->first()->tipo}}</p> 
              <a href="{{route('products.show',$producto->id)}}" class="btn btn-warning">Detalles</a>
            </div>
            </div>          
          </div>
          @endforeach
         </div>
         <br>
         <a class="btn btn-danger" href="{{route('products.destroy', $producto->id)}}" type="button">Eliminar</a>
          <a class="btn btn-primary" href="{{route('products.create')}}" type="button">Agregar Producto</a><br><br>         
    </div>   

@stop