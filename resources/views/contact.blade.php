@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
        <h1><p class="font-weight-bold">Ingrese datos de contacto</p></h1>
                    
        <form>
        <div class="row">
            <div class="col-3">
            <input type="text" class="form-control" placeholder="Nombre" required>
            </div>

            <div class="col-3">
            <input type="text" class="form-control" placeholder="Apellido" required>
            </div>

            <div class="col">
            <input type="email" class="form-control" placeholder="Correo@contacto" required>
            </div>
        </div><br><br>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Escribenos</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        </form>

    </div>

    <div class="row">
        <div class="col">
        <button type="button" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</div>

@stop