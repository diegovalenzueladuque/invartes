@extends('adminlte::page')

@section('title', 'Computadores')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center rounded btn btn-outline-secondary" style="width: 18rem;">COMPUTADORES</h1>
</div><br>
<div class="container">
    <a href="{{ route('computadores.create') }}" class="btn btn-outline-primary">CREAR</a><br><br>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Código</th>
            <th scope="col">Serie</th>
            <th scope="col">Marca</th>
            <th scope="col">Inventario</th>
            <th scope="col">Funcionario</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Acciones</th>
            
           
          </tr>
        </thead>
        
        <tbody>
            @foreach ($computadores as $computador)
                <tr>
                    <td>{{ $computador->id }}</td>
                    <td>{{ $computador->codigo }}</td>
                    <td>{{ $computadoro->serie}}</td>
                    <td>{{ $computador->marca->nombre}}</td>
                    <td>{{ $computador->detalle->created_at}}</td>
                    <td>{{ $computador->funcionario->$nombre, $ap_paterno, $ap_materno}}</td>
                    <td>{{ $computador->telefono->anexo}}</td>
                    <td>
                        <form action="{{ route('computadores.destroy', $computador->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/computadores/{{ $computador->id }}/edit" class="btn btn-outline-info"><i class="fas fa-pen"></i>&nbsp;EDITAR</a>&nbsp;&nbsp;
                            
                            
                            <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash"></i>&nbsp;ELIMINAR</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      
</div>

    
@stop

