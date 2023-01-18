@extends('adminlte::page')

@section('title', 'Editar Sistemas')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center rounded btn btn-outline-secondary" style="width: 18rem;">EDITAR S. O.</h1>
</div><br>
<div class="container">
    <form action="{{ route ('sistemas.update', $sistemas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="" class="form-label">Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre" value="{{ $sistemas->nombre }}" required><br>
        
        
        <a href="{{ route('sistemas.index') }}" class="btn btn-outline-warning">CANCELAR</a>
        <button class="btn btn-outline-success" type="submit">ACTUALIZAR</button>
        

    </form>
</div>

    
@stop