@extends('layouts.master')

@section('content')

    <div class="container">
    <h1> Agregar producto a inventario </h1>
    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
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

                    <div class="mb-3">
                      <label for="formFileSm" class="form-label" > Ingrese imagen del producto</label>
                      <input type="file" class="form-control-file" name="imagen" id="imagen" accept=".png, .jpg, .jpeg">
                    </div><br>
                    

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