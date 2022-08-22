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
          <th>categoria</th>
          <th>descripcion</th>
        </tr>
      </thead>
      <tbody>
    @foreach ($productos as $producto)
        <tr>
          <td><img src="{{$producto->imagen}}" class="card-img-top" alt="..." style="width: 18rem;"></td>
          <td>{{$producto->nombre}}</td>
          <td>{{ $producto->categoria()->first()->tipo}}</td>
          <td>{{$producto->descripcion}}</td> 
        </tr>
      </tbody>
    @endforeach
    </table>
  </div>
</div>

@stop