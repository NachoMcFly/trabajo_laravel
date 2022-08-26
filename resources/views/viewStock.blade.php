@extends('layouts.master')

@section('content')

<div class="container">
  <h1>Vista de Productos </h1>
  <div class="row">
    @foreach($stock as $stock)
      <div class="col-3">
        <div class="card" style="width: 17rem;">
          <img src="{{ $stock->producto()->first()->imagen }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $stock->producto()->first()->nombre }}</h5>
              <p class="card-text">Sucursal: {{ $stock->sucursal()->first()->nombre }}</p>
              <p class="card-text">Stock: {{ $stock->stock }}</p>
              <p class="card-text">Precio: ${{ $stock->precio }}</p>
              <p class="card-text">Sku: {{ $stock->codigo}}</p> 
            </div>

            <div class="row">
              <div class="col-3" align="left">
              <a class="btn btn-warning btn-sm" href="{{route( 'stock.edit', $stock->id )}}" type="button">Editar</a>
            </div>  
            <div class="col-3" align="right">
                <form action="{{route('stock.destroy', $stock->id )}}" method="POST">
                    @method('DELETE')
                    @csrf
                  <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </div>               
        </div><br>
      </div>            
    </div>    
      @endforeach           
  </div><br>        
</div>       

@stop