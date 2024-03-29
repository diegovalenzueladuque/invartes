@extends('adminlte::page')

@section('title', 'Funcionarios')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center rounded btn btn-outline-secondary" style="width: 18rem;">FUNCIONARIOS</h1>
</div><br>
<div class="container">
    <a href="{{ route('funcionarios.create') }}" class="btn btn-outline-primary"><i class="fas fa-user-plus"></i>&nbsp;CREAR</a><br><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Rol</th>
                <th scope="col">Unidad</th>
                <th scope="col">Creado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($funcionarios as $funcionario)
                <tr>
                    <td>{{ $funcionario->id }}</td>
                    <td>{{ $funcionario->nombre }}</td>
                    <td>{{ $funcionario->ap_paterno}}</td>
                    <td>{{ $funcionario->ap_materno}}</td>
                    <td>{{ $funcionario->rol->nombre ?? ''}}</td>
                    <td>{{ $funcionario->unidad->nombre ?? ''}}</td>
                    <td>{{ $funcionario->created_at->format('d-m-Y-H:i:s') }}</td>
                    <td>
                        <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/funcionarios/{{ $funcionario->id }}/edit" class="btn btn-outline-info"><i class="fas fa-pen"></i>&nbsp;EDITAR</a>&nbsp;&nbsp;
                            
                            
                            <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash"></i>&nbsp;ELIMINAR</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
      
</div>

    
@stop

