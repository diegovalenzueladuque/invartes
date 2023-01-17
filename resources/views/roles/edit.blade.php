@extends('adminlte::page')

@section('title', 'Editar Roles')

@section('content_header')

<div class="container-fluid">
    <h3 class="shadow text-center text-light rounded bg-dark" style="width: 18rem;"><b>EDITAR ROLES</b></h3>
</div><br>
<div class="container">
    <form action="{{ route ('roles.update', $rol->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="" class="form-label">Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre" value="{{ $rol->nombre }}" required><br>
        <a href="{{ route('roles.index') }}" class="btn btn-outline-warning">CANCELAR</a>
        <button class="btn btn-outline-success" type="submit">ACTUALIZAR</button>
        

    </form>
</div>

    
@stop