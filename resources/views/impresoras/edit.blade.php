@extends('adminlte::page')

@section('title', 'Editar Impresoras')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center text-light rounded" style="width: 12rem;background: rgb(35,34,40);
    background: linear-gradient(90deg, rgba(35,34,40,1) 0%, rgba(75,75,83,1) 35%, rgba(208,209,209,1) 100%);"><b>EDITAR IMPRESORAS</b></h1>
</div><br>
<div class="container">
    <form action="{{ route ('impresoras.update', $impresoras->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="" class="form-label">Modelo</label>
        <input class="form-control" type="text" name="modelo" id="modelo" value="{{ $impresoras->modelo }}"><br>
        <label for="" class="form-label">Serie</label>
        <input class="form-control" type="text" name="serie" id="serie" value="{{ $impresoras->serie }}"><br>
        <label for="" class="form-label">Marca</label>
        <select class="form-control" name="marca_id" id="marca_id">
            <option value="">Seleccione una opción</option>
            @foreach ($marcas as $marca)
            <option value="{{ $marca['id'] }}">{{ $marca['nombre'] }}</option>
                
            @endforeach
        </select><br>
        <label for="" class="form-label">Conexión</label>
        <input class="form-control" type="text" name="Conexion" id="Conexion" placeholder="1 o 2. USB o RED" value="{{ $impresoras->Conexion }}">
        <a href="{{ route('impresoras.index') }}" class="btn btn-outline-warning">CANCELAR</a>
        <button class="btn btn-outline-success" type="submit">ACTUALIZAR</button>
        

    </form>
</div>

    
@stop