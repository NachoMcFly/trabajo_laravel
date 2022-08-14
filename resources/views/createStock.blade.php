@extends('layouts.master')

@section('content')

    <div class="container">
    <h1> Agregar Stock y Precio a Inventario por Sucursal </h1>
    <form action="{{route('stock.store')}}" method="post">
    @csrf
        <div class="form-row">
          
            <div class="col-md-6 mb-3">
                <input
                    type="number"
                    class="form-control is-valid"
                    id="stock"
                    name="stock"
                    placeholder="Ingresar Stock"
                    required/><br>

                    <input
                    type="number"
                    class="form-control is-valid"
                    id="precio"
                    name="precio"
                    placeholder="Ingresar Precio"
                    required/><br>

                    <select class="custom-select" name="producto" placeholder="relleno">
                    <option selected value=""> -- Seleccionar Producto -- </option>
                      @foreach ($productos as $producto)
                        <option value="{{ $producto->id }}">{{ $producto->nombre }}</option> 
                      @endforeach
                    </select><br><br>

                    <select class="custom-select" name="sucursal" placeholder="Selecciona la sucursal">
                    <option selected value=""> -- Sucursal -- </option>
                    @foreach ($sucursal as $sucursal)
                        <option value="{{ $sucursal->id }}">{{ $sucursal->nombre }}</option> 
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