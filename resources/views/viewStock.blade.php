@extends('layouts.master')

@section('content')

    <div class="container">
      
      <h1>Vista de Productos </h1>
        @csrf
         <div class="row">
           @foreach($stock as $stock)
          <div class="col-3">
            <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $stock->producto_id }}</5>
              <p class="card-text">{{ $stock->sucursal_id }}</p>
              <p class="card-text">{{ $stock->descripcion }}</p>
              <a href="#" class="btn btn-primary">algo</a>
            </div>
            </div>          
          </div>
          @endforeach
         </div>
         <br>
          <a class="btn btn-primary" href="{{route('products.create')}}" type="button">Agregar Producto</a><br><br>         
    </div>   

@stop