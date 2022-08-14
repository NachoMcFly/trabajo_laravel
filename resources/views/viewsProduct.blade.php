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
              <h5 class="card-title">{{ $producto->nombre }}</h5>
              <p class="card-text">Descripcion: {{ $producto->descripcion }}.</p>
              <p class="card-text">Categoria: {{ $producto->categoria()->first()->tipo}}</p>
              <p class="card-text">Sku: {{ $producto->codigo}}</p> 
              <a href="{{route('products.show',$producto->id)}}" class="btn btn-warning">Detalles</a>
            </div>
          </div>          
        </div>
        @endforeach         
  </div><br>
  <a class="btn btn-danger" href="{{route('products.destroy', $producto->id)}}" type="button">Eliminar</a>     
</div>   

@stop