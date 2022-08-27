@extends('layouts.master')

@section('content')

    <div class="container">
    <h1> Editar producto </h1>
    <form action="{{route('products.update', $producto->id)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
        <div class="form-row">
          
            <div class="col-md-6 mb-3">
                    <input
                    type="text"
                    class="form-control is-valid"
                    id="nombre"
                    name="nombre"
                    placeholder="Nombre de producto"
                    value="{{ $producto->nombre }}"
                    required/><br>

                    <input
                    type="text"
                    class="form-control is-valid"
                    id="descripcion"
                    name="descripcion"
                    placeholder="Descripción del Producto"
                    value="{{ $producto->descripcion }}"
                    required/><br>

                    

                    @if(Storage::disk('images')->has($producto->imagen))
                      <div class="mb-3">
                        <img src="{{ url('miniatura/'.$producto->imagen) }}" class="card-img-top" alt="..." style="width: 17rem;">
                        <input type="file" class="form-control-file" name="imagen" id="imagen" accept=".png, .jpg, .jpeg">
                      </div><br>
                    
                    @endif

                    <select class="custom-select" name="categoria" placeholder="Selecciona la categoría">
                      @foreach ($categoria as $categoria)
                        @if($categoria->id == $producto->categoria_id)
                            <option value="{{ $categoria->id }}" selected> {{ $categoria->tipo }}</option>
                        @else
                        <option value="{{ $categoria->id }}" > {{ $categoria->tipo }}</option>
                        @endif 
                      @endforeach
                    </select><br><br>

                </div>
              </div>
              <br>
              
              @if($errors->any())
           <div class="alert alert-danger">
            <ul> 
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            </div>
            @endif
              <button class="btn btn-primary" type="submit">Guardar</button>          
            </form><br>
</div>   

@stop