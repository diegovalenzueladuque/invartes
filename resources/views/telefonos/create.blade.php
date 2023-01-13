@extends('adminlte::page')

@section('title', 'Ingresar Teléfono')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center text-light rounded" style="width: 12rem;background: rgb(35,34,40);
    background: linear-gradient(90deg, rgba(35,34,40,1) 0%, rgba(75,75,83,1) 35%, rgba(208,209,209,1) 100%);"><b>INGRESAR TELÉFONO</b></h1>
</div><br>
<div class="container">
    <form action={{ route('telefonos.index') }} method="POST">
        @csrf
        <label for="" class="form-label">Anexo</label>
        <input class="form-control" type="text" name="anexo" id="anexo"><br>
        <label for="" class="form-label">Marca</label>
        <select class="form-control" name="marca_id" id="marca_id">
            <option value="">Seleccione una opción</option>
            @foreach ($marcas as $marca)
            <option value="{{ $marca['id'] }}">{{ $marca['nombre'] }}</option>
                
            @endforeach
        </select><br>
        
        <label for="" class="form-label">Modelo</label>
        <input class="form-control" type="text" name="modelo" ip="modelo"><br>
        <label for="" class="form-label">Tipo</label>
        <input class="form-control" type="text" name="tipo" id="tipo" placeholder="1 o 2. ANÁLOGO O IP"><br>        
        <label for="" class="form-label">Mac Address</label>
        <input class="form-control" type="text" name="macaddress" ip="macaddress"><br>
        <label for="" class="form-label">IP</label>
        <input class="form-control" type="text" name="ip" ip="ip"><br>
        <label for="" class="form-label">Serie</label>
        <input class="form-control" type="text" name="serie" ip="serie"><br>      
        
        <a href="{{ route('telefonos.index') }}" class="btn btn-outline-warning">CANCELAR</a>
        <button class="btn btn-outline-success" type="submit">CREAR</button>
        

    </form>
</div>

    
@stop