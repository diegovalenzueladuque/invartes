@extends('adminlte::page')

@section('title', 'Crear Unidades')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center text-light rounded" style="width: 12rem;background: rgb(35,34,40);
    background: linear-gradient(90deg, rgba(35,34,40,1) 0%, rgba(75,75,83,1) 35%, rgba(208,209,209,1) 100%);"><b>CREAR UNIDADES</b></h1>
</div>
<div class="container">
    <form action={{ route('unidades.index') }} method="POST">
        @csrf
        <label for="" class="form-label">Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre"><br>
        <label for="" class="form-label">Oficina</label>
        <input class="form-control" type="text" name="oficina_id" id="oficina_id"><br>
        <label for="" class="form-label">Sede</label>
        <input class="form-control" type="text" name="sede_id" id="sede_id"><br>
        <a href="{{ route('unidades.index') }}" class="btn btn-outline-warning">CANCELAR</a>
        <button class="btn btn-outline-success" type="submit">CREAR</button>
        

    </form>
</div>

    
@stop