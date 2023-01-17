@extends('adminlte::page')

@section('title', 'Crear Oficinas')

@section('content_header')

<div class="container-fluid">
    <h3 class="shadow text-center text-light rounded bg-dark" style="width: 18rem;"><b>CREAR OFICINAS</b></h3>
</div><br>
<div class="container">
    <form action={{ route('oficinas.index') }} method="POST">
        @csrf
        <label for="" class="form-label">Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre" required><br>
        <label for="" class="form-label">Unidad</label>
        <select class="form-control" name="unidad_id" id="unidad_id" required>
            <option value="">Seleccione una opción</option>
            @foreach ($unidades as $unidad)
            <option value="{{ $unidad['id'] }}">{{ $unidad['nombre'] }}</option>
                
            @endforeach
        </select><br>
        <label for="" class="form-label">Sede</label>
        <select class="form-control" name="sede_id" id="sede_id" required>
            <option value="">Seleccione una opción</option>
            @foreach ($sedes as $sede)
            <option value="{{ $sede['id'] }}">{{ $sede['nombre'] }}</option>
                
            @endforeach
        </select><br>
        
        <a href="{{ route('oficinas.index') }}" class="btn btn-outline-warning">CANCELAR</a>
        <button class="btn btn-outline-success" type="submit">CREAR</button>
        

    </form>
</div>

    
@stop