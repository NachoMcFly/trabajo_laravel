@extends('layouts.master')

@section('content')

    <div class="container">
      
      <h1>Vista de Productos </h1>
        @csrf
         <div class="row">
           @foreach($producto as $producto)
          <div class="col-3">
            <div class="card" style="width: 18rem;">
            <img src="{{ $producto->imagen }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $producto->nombre }}</5>
              <p class="card-text">{{ $producto->categoria_id }}</p>
              <a href="#" class="btn btn-primary">algo</a>
            </div>
            </div>          
          </div>
          @endforeach
         </div>
         <br>
         <a class="btn btn-danger" href="..." type="button">Eliminar</a>
          <a class="btn btn-primary" href="{{route('products.create')}}" type="button">Agregar Producto</a><br><br>         
    </div>   

@stop