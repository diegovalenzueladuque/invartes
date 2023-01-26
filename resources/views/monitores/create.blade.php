@extends('adminlte::page')

@section('title', 'Ingresar Monitor')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center rounded btn btn-outline-secondary" style="width: 18rem;">INGRESAR MONITOR</h1>
</div><br>
<div class="container">
    @if ($errors->any())
        <div class="alert alert-warning" style="width:25rem">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action={{ route('monitores.index') }} method="POST">
        @csrf
        <label for="" class="form-label">Modelo</label>
        <input class="form-control" type="text" name="modelo" id="modelo"><br>
        <label for="" class="form-label">Serie</label>
        <input class="form-control" type="text" name="serie" id="serie"><br>
        <label for="" class="form-label">Marca</label>
        <select class="form-control" name="marca_id" id="marca_id">
            <option value="">Seleccione una opción</option>
            @foreach ($marcas as $marca)
            <option value="{{ $marca['id'] }}">{{ $marca['nombre'] }}</option>
                
            @endforeach
        </select><br>
              
        
                
        
        <a href="{{ route('monitores.index') }}" class="btn btn-outline-warning">CANCELAR</a>
        <button class="btn btn-outline-success" type="submit">CREAR</button>
        

    </form>
</div>

    
@stop