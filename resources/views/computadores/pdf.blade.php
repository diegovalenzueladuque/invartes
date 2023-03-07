@extends('adminlte::page')

@section('title', 'Mostrar Computador')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center rounded btn btn-outline-secondary" style="width: 18rem;">DATOS COMPUTADOR</h1>
</div><br>
<div class="container">
    @if ($errors->any())
        <div class="alert alert-info" style="width:25rem">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route ('computadores.pdf', $computadores->id) }}" method="POST">
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
                <input type="text" class="form-control" name="sistema_id" id="sistema_id" value="{{ $computadores->sistema->nombre }}"><br>

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
                <input type="text" class="form-control" name="marca_id" id="marca_id" value="{{ $computadores->marca->nombre }}"><br>
                
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="" class="form-label">Funcionario</label>
                <input type="text" class="form-control" name="funcionario_id" id="funcionario_id" value="{{ $computadores->funcionario->nombre }} {{ $computadores->funcionario->ap_paterno }} {{ $computadores->funcionario->ap_materno }}"><br>
                
            </div>
            <div class="col">
                <label for="" class="form-label">Anexo</label>
                <input type="text" class="form-control" name="telefono_id" id="telefono_id" value="{{ $computadores->telefono->anexo }}">
                
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="" class="form-label">Impresora</label>
                <input type="text" class="form-control" name="impresora_id" id="impresora_id" value="Modelo: {{ $computadores->impresora->modelo }}.  Serie: {{ $computadores->impresora->serie }}">
                
            </div>
            <div class="col">
                <label for="" class="form-label">Monitor</label>
                <input type="text" class="form-control" name="monitor_id" id="monitor_id" value="Modelo: {{ $computadores->monitor->modelo }}. Serie: {{ $computadores->monitor->serie }}">
                
            </div>
        </div><br><br>
        
        

    </form>
</div>

    
@stop