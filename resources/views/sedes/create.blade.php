@extends('adminlte::page')

@section('title', 'Crear Sedes')

@section('content_header')

<div class="container-fluid">
    <h3 class="shadow text-center text-light rounded bg-dark" style="width: 18rem;"><b>CREAR SEDES</b></h3>
</div><br>
<div class="container">
    <form action={{ route('sedes.index') }} method="POST">
        @csrf
        <label for="" class="form-label">Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre" required><br>
        <label for="" class="form-label">Dirección</label>
        <input class="form-control" type="text" name="direccion" id="direccion" required><br>
        <a href="{{ route('sedes.index') }}" class="btn btn-outline-warning">CANCELAR</a>
        <button class="btn btn-outline-success" type="submit">CREAR</button>
        

    </form>
</div>

    
@stop