@extends('layouts.master')

@section('content')

<div class="container">
  <h1>Vista de Productos </h1>
    <div class="row">
      @foreach($productos as $producto)
        <div class="col-3">
          <div class="card" style="width: 17rem;">
            @if(Storage::disk('images')->has($producto->imagen))
              <img src="{{ url('miniatura/'.$producto->imagen) }}" class="card-img-top" alt="...">
            @else
              <img src="{{ $producto->imagen }}" class="card-img-top" alt="...">
            @endif

            <div class="card-body">
              <h5 class="card-title">{{ $producto->nombre }}</h5>
              <p class="card-text">Descripcion: {{ $producto->descripcion }}.</p>
              <p class="card-text">Categoria: {{ $producto->categoria()->first()->tipo}}</p>
              <p class="card-text"> {{ FormatTime::LongTimeFiler($producto->created_at) }}</p>
              <p class="card-text"> {{ FormatTime::LongTimeFiler($producto->updated_at) }}</p>
            </div>
            <div class="row">
              <div class="col-3" align="left">
                <a class="btn btn-warning btn-sm" href="{{route( 'products.edit', $producto->id )}}" type="button">Editar</a>
              </div>  
              <div class="col-3" align="right">
                <form action="{{route('products.destroy', $producto->id )}}" method="POST">
                    @method('DELETE')
                    @csrf
                  <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
              </div>               
            </div><br>
            
          </div>          
        </div><br>
        @endforeach 
      </div><br>
        
</div>   

@stop