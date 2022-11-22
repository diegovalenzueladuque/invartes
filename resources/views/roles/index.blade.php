@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center text-light rounded" style="width: 12rem;background: rgb(35,34,40);
    background: linear-gradient(90deg, rgba(35,34,40,1) 0%, rgba(75,75,83,1) 35%, rgba(208,209,209,1) 100%);"><b>ROLES</b></h1>
</div>
<div class="container">
    <a href="{{ route('roles.create') }}" class="btn btn-outline-primary">CREAR</a>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
           
          </tr>
        </thead>
        
        <tbody>
            @foreach ($roles as $rol)
                <tr>
                    <td>{{ $rol->id }}</td>
                    <td>{{ $rol->nombre }}</td>
                    <td>
                        <form action="{{ route('roles.destroy', $rol->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <i class="fas fa-pen"></i>&nbsp;<a href="/roles/{{ $rol->id }}/edit" class="btn btn-outline-info">EDITAR</a>&nbsp;&nbsp;
                            
                            <i class="fas fa-trash"></i>&nbsp;<button type="submit" class="btn btn-outline-danger">ELIMINAR</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      
</div>

    
@stop

