@extends('layouts.master')

@section('content')

    <div class="container">
    <h1> Agregar producto a inventario </h1>
    <form action="{{route('products.store')}}" method="post">
    @csrf
        <div class="form-row">
          
            <div class="col-md-6 mb-3">
                <input
                    type="text"
                    class="form-control is-valid"
                    id="nombre"
                    name="nombre"
                    placeholder="Nombre de producto"
                    required/><br>

                    <input
                    type="text"
                    class="form-control is-valid"
                    id="descripcion"
                    name="descripcion"
                    placeholder="Descripción del Producto"
                    required/><br>

                    <input
                    type="text"
                    class="form-control is-valid"
                    id="imagen"
                    name="imagen"
                    placeholder="URL imagen"
                    required/><br>

                    <select class="custom-select" name="categoria" placeholder="Selecciona la categoría">
                    <option selected value="categoria"> -- Categorias -- </option>
                    @foreach ($categoria as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->tipo }}</option> 
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