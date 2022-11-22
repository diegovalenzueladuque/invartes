@extends('adminlte::page')

@section('title', 'Sedes')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center text-light rounded" style="width: 12rem;background: rgb(35,34,40);
    background: linear-gradient(90deg, rgba(35,34,40,1) 0%, rgba(75,75,83,1) 35%, rgba(208,209,209,1) 100%);"><b>SISTEMAS</b></h1>
</div>
<div class="container">
    <a href="{{ route('sistemas.create') }}" class="btn btn-outline-primary">CREAR</a>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            
           
          </tr>
        </thead>
        
        <tbody>
            @foreach ($sistemas as $sistema)
                <tr>
                    <td>{{ $sistema->id }}</td>
                    <td>{{ $sistema->nombre }}</td>
                    
                    <td>
                        <form action="{{ route('sistemas.destroy', $sistema->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <i class="fas fa-pen"></i>&nbsp;<a href="/sistemas/{{ $sistema->id }}/edit" class="btn btn-outline-info">EDITAR</a>&nbsp;&nbsp;
                            
                            
                            <i class="fas fa-trash"></i>&nbsp;<button type="submit" class="btn btn-outline-danger">ELIMINAR</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      
</div>

    
@stop

