@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center rounded btn btn-outline-secondary" style="width: 18rem;">ROLES</h1>
</div><br>
<div class="container">
    <a href="{{ route('roles.create') }}" class="btn btn-outline-primary"><i class="fas fa-user-plus"></i>&nbsp;CREAR</a><br><br>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Creado</th>
            <th scope="col">Acciones</th>
           
          </tr>
        </thead>
        
        <tbody>
            @foreach ($roles as $rol)
                <tr>
                    <td>{{ $rol->id }}</td>
                    <td>{{ $rol->nombre }}</td>
                    <td>{{ $rol->created_at->format('d-m-Y-H:i:s') }}</td>
                    <td>
                        <form action="{{ route('roles.destroy', $rol->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/roles/{{ $rol->id }}/edit" class="btn btn-outline-info"><i class="fas fa-pen"></i>&nbsp;EDITAR</a>&nbsp;&nbsp;
                            
                            <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash"></i>&nbsp;ELIMINAR</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
      
</div>

    
@stop

