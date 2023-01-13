@extends('adminlte::page')

@section('title', 'Oficinas')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center text-light rounded" style="width: 12rem;background: rgb(35,34,40);
    background: linear-gradient(90deg, rgba(35,34,40,1) 0%, rgba(75,75,83,1) 35%, rgba(208,209,209,1) 100%);"><b>OFICINAS</b></h1>
</div><br>
<div class="container">
    <a href="{{ route('oficinas.create') }}" class="btn btn-outline-primary">CREAR</a>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Unidad</th>
            <th scope="col">Sede</th>
                    
           
          </tr>
        </thead>
        
        <tbody>
            @foreach ($oficinas as $oficina)
                <tr>
                    <td>{{ $oficina->id }}</td>
                    <td>{{ $oficina->nombre }}</td>
                    <td>{{ $oficina->unidad->nombre }}</td>
                    <td>{{ $oficina->sede->nombre }}</td>
                    <td>
                        <form action="{{ route('oficinas.destroy', $oficina->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <i class="fas fa-pen"></i>&nbsp;<a href="/oficinas/{{ $oficina->id }}/edit" class="btn btn-outline-info">EDITAR</a>&nbsp;&nbsp;
                            
                            
                            <i class="fas fa-trash"></i>&nbsp;<button type="submit" class="btn btn-outline-danger">ELIMINAR</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      
</div>

    
@stop

