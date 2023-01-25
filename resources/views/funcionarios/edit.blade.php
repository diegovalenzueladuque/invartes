@extends('adminlte::page')

@section('title', 'Editar Funcionarios')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center rounded btn btn-outline-secondary" style="width: 18rem;">EDITAR FUNCIONARIO</h1>
</div><br>
<div class="container">
    <form action="{{ route ('funcionarios.update', $funcionarios->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="" class="form-label">Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre" value="{{ $funcionarios->nombre }}" autofocus required><br>
        <label for="" class="form-label">Apellido Paterno</label>
        <input class="form-control" type="text" name="ap_paterno" id="ap_paterno" value="{{ $funcionarios->ap_paterno }}" required><br>
        <label for="" class="form-label">Apellido Materno</label>
        <input class="form-control" type="text" name="ap_materno" id="ap_materno" value="{{ $funcionarios->ap_materno }}" required><br>
        <label for="" class="form-label">Rol</label>
        <select class="form-control" name="rol_id" id="rol_id" required>
            <option value="">Seleccione una opción</option>
            @foreach ($roles as $rol)
            <option value="{{ $rol['id'] }}">{{ $rol['nombre'] }}</option>
                
            @endforeach
        </select><br>
        
        
        <label for="" class="form-label">Unidad</label>
        <select class="form-control" name="unidad_id" id="unidad_id" required>
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