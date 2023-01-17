@extends('adminlte::page')

@section('title', 'Editar Unidades')

@section('content_header')

<div class="container-fluid">
    <h3 class="shadow text-center text-light rounded bg-dark" style="width: 18rem;"><b>EDITAR UNIDADES</b></h3>
</div><br>
<div class="container">
    <form action={{ route('unidades.update', $unidades->id) }} method="POST">
        @csrf
        @method('PUT')
        <label for="" class="form-label">Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre" value="{{ $unidades->nombre }}" required><br>
        
        
        
        
        
        <a href="{{ route('unidades.index') }}" class="btn btn-outline-warning">CANCELAR</a>
        <button class="btn btn-outline-success" type="submit">Actualizar</button>
        

    </form>
</div>

    
@stop
