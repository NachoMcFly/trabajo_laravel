@extends('layouts.master')

@section('content')

    <div class="container">
    <h1> Editar Stock y Precio del Inventario por Sucursal </h1>
    <form action="{{ route('stock.update', $stock->id) }}" method="post">
    @method('PUT')
    @csrf
        <div class="form-row">
          
            <div class="col-md-6 mb-3">
                <input
                    type="number"
                    class="form-control is-valid"
                    id="stock"
                    name="stock"
                    placeholder="Ingresar Stock"
                    value="{{ $stock->stock }}"
                    required/><br>

                    <input
                    type="number"
                    class="form-control is-valid"
                    id="precio"
                    name="precio"
                    placeholder="Ingresar Precio"
                    value="{{ $stock->precio }}"
                    required/><br>

                    <select class="custom-select" name="producto" placeholder="relleno">
                      @foreach ($productos as $producto)
                        @if($producto->id == $stock->producto_id )
                          <option value="{{ $producto->id }}" selected>{{ $producto->nombre }}</option>
                        @else
                        <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                        @endif
                      @endforeach
                    </select><br><br>

                    <select class="custom-select" name="sucursal" placeholder="Selecciona la sucursal">
                      @foreach ($sucursal as $sucursal)
                        @if($sucursal->id == $stock->sucursal_id)
                          <option value="{{ $sucursal->id }}" selected>{{ $sucursal->nombre }}</option>
                        @else
                        <option value="{{ $sucursal->id }}">{{ $sucursal->nombre }}</option>
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