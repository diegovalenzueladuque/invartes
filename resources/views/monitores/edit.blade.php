@extends('adminlte::page')

@section('title', 'Editar Impresoras')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center rounded btn btn-outline-secondary" style="width: 18rem;">EDITAR IMPRESORAS</h1>
</div><br>
<div class="container">
    <form action="{{ route ('impresoras.update', $impresoras->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="" class="form-label">Modelo</label>
        <input class="form-control" type="text" name="modelo" id="modelo" value="{{ $impresoras->modelo }}" required><br>
        <label for="" class="form-label">Serie</label>
        <input class="form-control" type="text" name="serie" id="serie" value="{{ $impresoras->serie }}" required><br>
        <label for="" class="form-label">Marca</label>
        <select class="form-control" name="marca_id" id="marca_id" required>
            <option value="">Seleccione una opción</option>
            @foreach ($marcas as $marca)
            <option value="{{ $marca['id'] }}">{{ $marca['nombre'] }}</option>
                
            @endforeach
        </select><br>
        <label for="" class="form-label">Conexión</label>
        <input class="form-control" type="text" name="Conexion" id="Conexion" placeholder="1 o 2. USB o RED" value="{{ $impresoras->Conexion }}" required>
        <a href="{{ route('impresoras.index') }}" class="btn btn-outline-warning">CANCELAR</a>
        <button class="btn btn-outline-success" type="submit">ACTUALIZAR</button>
        

    </form>
</div>

    
@stop