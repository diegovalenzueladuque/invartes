@extends('adminlte::page')

@section('title', 'Editar Teléfonos')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center rounded btn btn-outline-secondary" style="width: 18rem;">EDITAR TELÉFONOS</h1>
</div><br>
<div class="container">
    <form action="{{ route ('telefonos.update', $telefonos->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="" class="form-label">Anexo</label>
        <input class="form-control" type="text" name="anexo" id="anexo" value="{{ $telefonos->anexo }}" required><br>
        <label for="" class="form-label">Marca</label>
        <select class="form-control" name="marca_id" id="marca_id" required>
            <option value="">Seleccione una opción</option>
            @foreach ($marcas as $marca)
            <option value="{{ $marca['id'] }}">{{ $marca['nombre'] }}</option>
                
            @endforeach
        </select><br>
        
        <label for="" class="form-label">Modelo</label>
        <input class="form-control" type="text" name="modelo" ip="modelo" value="{{ $telefonos->modelo }}" required><br>
        <label for="" class="form-label">Tipo</label>
        <input class="form-control" type="text" name="tipo" id="tipo" placeholder="1 o 2. ANÁLOGO O IP" value="{{ $telefonos->tipo }}" required><br>        
        <label for="" class="form-label">Mac Address</label>
        <input class="form-control" type="text" name="macaddress" ip="macaddress" value="{{ $telefonos->macaddress }}" required><br>
        <label for="" class="form-label">IP</label>
        <input class="form-control" type="text" name="ip" ip="ip" value="{{ $telefonos->ip }}" required><br>
        <label for="" class="form-label">Serie</label>
        <input class="form-control" type="text" name="serie" ip="serie" value="{{ $telefonos->serie }}" required><br>
        <a href="{{ route('telefonos.index') }}" class="btn btn-outline-warning">CANCELAR</a>
        <button class="btn btn-outline-success" type="submit">ACTUALIZAR</button>
        

    </form>
</div>

    
@stop