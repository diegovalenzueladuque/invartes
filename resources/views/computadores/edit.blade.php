@extends('adminlte::page')

@section('title', 'Actualizar Computador')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center rounded btn btn-outline-secondary" style="width: 18rem;">EDITAR COMPUTADOR</h1>
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
    <form action="{{ route ('computadores.update', $computadores->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="" class="form-label">Código</label>
                <input class="form-control" type="text" name="codigo" id="codigo" autofocus value="{{ $computadores->codigo }}"><br>
            </div>
            <div class="col">
                <label for="" class="form-label">Serie</label>
                <input class="form-control" type="text" name="serie" id="serie" value="{{ $computadores->serie }}"><br>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="" class="form-label">CPU</label>
                <input type="text" class="form-control" name="cpu" id="cpu" value="{{ $computadores->cpu }}"><br>
            </div>
            <div class="col">
                <label for="" class="form-label">RAM</label>
                <input type="text" class="form-control" name="ram" id="ram" value="{{ $computadores->ram }}"><br>
            </div>
            
                       

        </div>
        <div class="row">
            <div class="col">
                <label for="" class="form-label">Sistema Operativo</label>
                <select class="form-control" name="sistema_id" id="sistema_id">
                    <option value="">Seleccione una opción</option>
                    @foreach ($sistemas as $sistema)
                    <option value="{{ $sistema['id'] }}">{{ $sistema['nombre'] }}</option>
                        
                    @endforeach
                </select><br>
            </div>
            <div class="col">
                <label for="" class="form-label">Mac Address</label>
                <input type="text" class="form-control" name="macaddress" id="macaddress" value="{{ $computadores->macaddress }}"><br>
            </div>
            
            
        </div>
        <div class="row">
            
            <div class="col">
                <label for="" class="form-label">IP</label>
                <input type="text" class="form-control" name="ip" id="ip" value="{{ $computadores->ip }}"><br>
            </div>
            <div class="col">
                <label for="" class="form-label">Marca</label>
                <select class="form-control" name="marca_id" id="marca_id">
                    <option value="">Seleccione una opción</option>
                    @foreach ($marcas as $marca)
                    <option value="{{ $marca['id'] }}">{{ $marca['nombre'] }}</option>
                
                    @endforeach
                </select><br>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="" class="form-label">Funcionario</label>
                <select class="form-control" name="funcionario_id" id="funcionario_id">
                    <option value="">Seleccione una opción</option>
                    @foreach ($funcionarios as $funcionario)
                    <option value="{{ $funcionario['id'] }}">{{ $funcionario->nombre }} {{ $funcionario->ap_paterno }} {{ $funcionario->ap_materno }}</option>
                        
                    @endforeach
                </select><br>
            </div>
            <div class="col">
                <label for="" class="form-label">Anexo</label>
                <select class="form-control" name="telefono_id" id="telefono_id">
                    <option value="">Seleccione una opción</option>
                    @foreach ($telefonos as $telefono)
                    <option value="{{ $telefono['id'] }}">{{ $telefono->anexo }}</option>
                        
                    @endforeach
                </select><br>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="" class="form-label">Impresora</label>
                <select class="form-control" name="impresora_id" id="impresora_id">
                    <option value="">Seleccione una opción</option>
                    @foreach ($impresoras as $impresora)
                    <option value="{{ $impresora['id'] }}">{{ $impresora->modelo }} {{ $impresora->serie }}</option>
                        
                    @endforeach
                </select><br>
            </div>
            <div class="col">
                <label for="" class="form-label">Monitor</label>
                <select class="form-control" name="monitor_id" id="monitor_id">
                    <option value="">Seleccione una opción</option>
                    @foreach ($monitores as $monitor)
                    <option value="{{ $monitor['id'] }}">{{ $monitor->modelo }} {{ $monitor->serie }}</option>
                        
                    @endforeach
                </select><br>
            </div>
        </div>
        <a href="{{ route('computadores.index') }}" class="btn btn-outline-warning">CANCELAR</a>
        <button class="btn btn-outline-success" type="submit">ACTUALIZAR</button>

    </form>
</div>

    
@stop