@extends('adminlte::page')

@section('title', 'Actualizar Funcionarios')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center text-light rounded" style="width: 12rem;background: rgb(35,34,40);
    background: linear-gradient(90deg, rgba(35,34,40,1) 0%, rgba(75,75,83,1) 35%, rgba(208,209,209,1) 100%);"><b>EDITAR FUNCIONARIO</b></h1>
</div><br>
<div class="container">
    <form action="{{ route ('funcionarios.update', $funcionarios->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="" class="form-label">Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre" value="{{ $funcionarios->nombre }}"><br>
        <label for="" class="form-label">Apellido Paterno</label>
        <input class="form-control" type="text" name="ap_paterno" id="ap_paterno" value="{{ $funcionarios->ap_paterno }}"><br>
        <label for="" class="form-label">Apellido Materno</label>
        <input class="form-control" type="text" name="ap_materno" id="ap_materno" value="{{ $funcionarios->ap_materno }}"><br>
        <label for="" class="form-label">Rol</label>
        <select class="form-control" name="rol_id" id="rol_id">
            <option value="">Seleccione una opción</option>
            @foreach ($roles as $rol)
            <option value="{{ $rol['id'] }}">{{ $rol['nombre'] }}</option>
                
            @endforeach
        </select><br>
        
        
        <label for="" class="form-label">Unidad</label>
        <select class="form-control" name="unidad_id" id="unidad_id">
            <option value="">Seleccione una opción</option>
            @foreach ($unidades as $unidad)
            <option value="{{ $unidad['id'] }}">{{ $unidad['nombre'] }}</option>
                
            @endforeach
        </select><br>
        <a href="{{ route('funcionarios.index') }}" class="btn btn-outline-warning">CANCELAR</a>
        <button class="btn btn-outline-success" type="submit">ACTUALIZAR</button>

    </form>
</div>

    
@stop