@extends('adminlte::page')

@section('title', 'Editar Marcas')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center rounded btn btn-outline-secondary" style="width: 18rem;">EDITAR MARCAS</h1>
</div><br>
<div class="container">
    <form action="{{ route ('marcas.update', $marcas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="" class="form-label">Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre" value="{{ $marcas->nombre }}" required><br>
        
        <a href="{{ route('marcas.index') }}" class="btn btn-outline-warning">CANCELAR</a>
        <button class="btn btn-outline-success" type="submit">ACTUALIZAR</button>
        

    </form>
</div>

    
@stop