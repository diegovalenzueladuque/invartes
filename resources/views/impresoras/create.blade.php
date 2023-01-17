@extends('adminlte::page')

@section('title', 'Ingresar Impresora')

@section('content_header')

<div class="container-fluid">
    <h3 class="shadow text-center text-light rounded bg-dark" style="width: 18rem;"><b>INGRESAR IMPRESORA</b></h3>
</div><br>
<div class="container">
    <form action={{ route('impresoras.index') }} method="POST">
        @csrf
        <label for="" class="form-label">Modelo</label>
        <input class="form-control" type="text" name="modelo" id="modelo" required><br>
        <label for="" class="form-label">Serie</label>
        <input class="form-control" type="text" name="serie" id="serie" required><br>
        <label for="" class="form-label">Marca</label>
        <select class="form-control" name="marca_id" id="marca_id" required>
            <option value="">Seleccione una opción</option>
            @foreach ($marcas as $marca)
            <option value="{{ $marca['id'] }}">{{ $marca['nombre'] }}</option>
                
            @endforeach
        </select><br>
        <label for="" class="form-label">Conexión</label>
        <input class="form-control" type="text" name="Conexion" id="Conexion" placeholder="1 o 2. USB o RED" required>        
        
                
        
        <a href="{{ route('impresoras.index') }}" class="btn btn-outline-warning">CANCELAR</a>
        <button class="btn btn-outline-success" type="submit">CREAR</button>
        

    </form>
</div>

    
@stop