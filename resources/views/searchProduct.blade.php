@extends('layouts.master')

@section('content')

<form action="{{route('search.index')}}" method="get">
  <div class="form-row">
    <div class="col-sm-4">
      <input type="text" class="form-control" name="texto" placeholder="Buscar por codigo de producto" value='{{$texto}}'>
    </div>
    <div class="col-auto">
      <input type="submit" class="btn btn-info" value="Buscar">
    </div>
  </div>
</form>

<div class="col-xl-12">
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>imagen</th>
          <th>Nombre</th>
          <th>Categoria</th>
          <th>Sucursal</th>
          <th>Codigo</th>
          <th>Descripcion</th>
        </tr>
      </thead>
      <tbody>
      
        @foreach($stock as $stock)
            <tr>
              <td>
              @if(Storage::disk('images')->has($stock->producto()->first()->imagen))
                <img src="{{ url('miniatura/'.$stock->producto()->first()->imagen) }}" style="width: 17rem;" class="card-img-top" alt="...">
              @else
                <img src="{{ $stock->producto()->first()->imagen }}" style="width: 17rem;" class="card-img-top" alt="...">
              @endif
              </td>
              <td>{{ $stock->producto()->first()->nombre }}</td>
              <td>{{ $stock->producto()->first()->categoria()->first()->tipo }}</td>
              <td>{{ $stock->sucursal()->first()->nombre }}</td>
              <td>{{ $stock->codigo }}</td>
              <td>{{ $stock->producto()->first()->descripcion }}</td> 
            </tr>
          </tbody>
        @endforeach
    
    </table>
  </div>
</div>

@stop