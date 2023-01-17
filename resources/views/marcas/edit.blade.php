@extends('adminlte::page')

@section('title', 'Editar Marcas')

@section('content_header')

<div class="container-fluid">
    <h3 class="shadow text-center text-light rounded bg-dark" style="width: 18rem;"><b>EDITAR MARCAS</b></h3>
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