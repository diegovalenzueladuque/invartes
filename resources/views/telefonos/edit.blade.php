@extends('adminlte::page')

@section('title', 'Editar Sedes')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center text-light rounded" style="width: 12rem;background: rgb(35,34,40);
    background: linear-gradient(90deg, rgba(35,34,40,1) 0%, rgba(75,75,83,1) 35%, rgba(208,209,209,1) 100%);"><b>EDITAR SEDES</b></h1>
</div><br>
<div class="container">
    <form action="{{ route ('telefonos.update', $telefonos->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="" class="form-label">Anexo</label>
        <input class="form-control" type="text" name="anexo" id="anexo" value="{{ $telefonos->anexo }}"><br>
        <label for="" class="form-label">Marca</label>
        <select class="form-control" name="marca_id" id="marca_id" >
            <option value="">Seleccione una opción</option>
            @foreach ($marcas as $marca)
            <option value="{{ $marca['id'] }}">{{ $marca['nombre'] }}</option>
                
            @endforeach
        </select><br>
        
        <label for="" class="form-label">Modelo</label>
        <input class="form-control" type="text" name="modelo" ip="modelo" value="{{ $telefonos->modelo }}"><br>
        <label for="" class="form-label">Tipo</label>
        <input class="form-control" type="text" name="tipo" id="tipo" placeholder="1 o 2. ANÁLOGO O IP" value="{{ $telefonos->tipo }}"><br>        
        <label for="" class="form-label">Mac Address</label>
        <input class="form-control" type="text" name="macaddress" ip="macaddress" value="{{ $telefonos->macaddress }}"><br>
        <label for="" class="form-label">IP</label>
        <input class="form-control" type="text" name="ip" ip="ip" value="{{ $telefonos->ip }}"><br>
        <label for="" class="form-label">Serie</label>
        <input class="form-control" type="text" name="serie" ip="serie" value="{{ $telefonos->serie }}"><br>
        <a href="{{ route('telefonos.index') }}" class="btn btn-outline-warning">CANCELAR</a>
        <button class="btn btn-outline-success" type="submit">ACTUALIZAR</button>
        

    </form>
</div>

    
@stop