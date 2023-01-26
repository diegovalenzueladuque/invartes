@extends('adminlte::page')

@section('title', 'Crear Unidades')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center rounded btn btn-outline-secondary" style="width: 18rem;">CREAR UNIDADES</h1>
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
    <form action={{ route('unidades.index') }} method="POST">
        @csrf
        <label for="" class="form-label">Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre"><br>
       
        
        
        
        
        <a href="{{ route('unidades.index') }}" class="btn btn-outline-warning">CANCELAR</a>
        <button class="btn btn-outline-success" type="submit">CREAR</button>
        

    </form>
</div>

    
@stop