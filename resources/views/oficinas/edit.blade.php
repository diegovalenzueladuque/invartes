@extends('adminlte::page')

@section('title', 'Editar Oficinas')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center text-light rounded" style="width: 12rem;background: rgb(35,34,40);
    background: linear-gradient(90deg, rgba(35,34,40,1) 0%, rgba(75,75,83,1) 35%, rgba(208,209,209,1) 100%);"><b>EDITAR OFICINAS</b></h1>
</div><br>
<div class="container">
    <form action="{{ route ('oficinas.update', $oficinas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="" class="form-label">Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre" value="{{ $oficinas->nombre }}" required><br>

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
        <button class="btn btn-outline-success" type="submit">ACTUALIZAR</button>
        

    </form>
</div>

    
@stop