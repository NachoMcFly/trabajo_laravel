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
            </div>
            <a class="btn btn-warning" href="{{route( 'products.edit', $producto->id )}}" class="d-inline" type="button">Editar</a>
            
            <form action="{{route('products.destroy', $producto->id )}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
            </form>
          </div>          
        </div>
        @endforeach 
      </div><br>
        
</div>   

@stop