@extends('adminlte::page')

@section('title', 'Ingreso Funcionarios')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center text-light rounded" style="width: 12rem;background: rgb(35,34,40);
    background: linear-gradient(90deg, rgba(35,34,40,1) 0%, rgba(75,75,83,1) 35%, rgba(208,209,209,1) 100%);"><b>INGRESO FUNCIONARIO</b></h1>
</div>
<div class="container">
    <form action={{ route('sedes.index') }} method="POST">
        @csrf
        <label for="" class="form-label">Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre"><br>
        <label for="" class="form-label">Dirección</label>
        <input class="form-control" type="text" name="direccion" id="direccion"><br>
        <a href="{{ route('sedes.index') }}" class="btn btn-outline-warning">CANCELAR</a>
        <button class="btn btn-outline-success" type="submit">CREAR</button>
        

    </form>
</div>

    
@stop