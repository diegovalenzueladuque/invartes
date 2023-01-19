@extends('adminlte::page')

@section('title', 'Ingresar Computador')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center rounded btn btn-outline-secondary" style="width: 18rem;">INGRESAR COMPUTADOR</h1>
</div><br>
<div class="container">
    <form action={{ route('funcionarios.index') }} method="POST">
        @csrf
        <label for="" class="form-label">Código</label>
        <input class="form-control" type="text" name="codigo" id="codigo"><br>
        <label for="" class="form-label">Serie</label>
        <input class="form-control" type="text" name="serie" id="serie"><br>
        <label for="" class="form-label">Marca</label>
        <select class="form-control" name="rol_id" id="rol_id">
            <option value="">Seleccione una opción</option>
            @foreach ($marcas as $marca)
            <option value="{{ $marca['id'] }}">{{ $marca['nombre'] }}</option>
                
            @endforeach
        </select><br>
        <label for="" class="form-label">CPU</label>
        <input type="text" class="form-control" name="cpu" id="cpu"><br>
        <label for="" class="form-label">RAM</label>
        <input type="text" class="form-control" name="ram" id="ram"><br>
        <label for="" class="form-label">Sistema Operativo</label>
        <select class="form-control" name="sistema_id" id="sistema_id">
            <option value="">Seleccione una opción</option>
            @foreach ($sistemas as $sistema)
            <option value="{{ $sistema['id'] }}">{{ $sistema['nombre'] }}</option>
                
            @endforeach
        </select><br>
        <label for="" class="form-label">Mac Address</label>
        <input type="text" class="form-control" name="macaddress" id="macaddress"><br>
        <label for="" class="form-label">IP</label>
        <input type="text" class="form-control" name="ip" id="ip"><br>
        <label for="" class="form-label">Funcionario</label>
        <select class="form-control" name="funcionario_id" id="funcionario_id">
            <option value="">Seleccione una opción</option>
            @foreach ($funcionarios as $funcionario)
            <option value="{{ $funcionario['id'] }}">{{ $funcionario->nombre }} {{ $funcionario->ap_paterno }} {{ $funcionario->ap_materno }}</option>
                
            @endforeach
        </select><br>
        
        <a href="{{ route('funcionarios.index') }}" class="btn btn-outline-warning">CANCELAR</a>
        <button class="btn btn-outline-success" type="submit">CREAR</button>
        

    </form>
</div>

    
@stop