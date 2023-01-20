@extends('adminlte::page')

@section('title', 'Monitores')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center rounded btn btn-outline-secondary" style="width: 18rem;">MONITORES</h1>
</div><br>
<div class="container">
    <a href="{{ route('monitores.create') }}" class="btn btn-outline-primary">CREAR</a><br><br>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Modelo</th>
            <th scope="col">Serie</th>
            <th scope="col">Marca</th>
            <th scope="col">Acciones</th>     
           
          </tr>
        </thead>
        
        <tbody>
            @foreach ($monitores as $monitor)
                <tr>
                    <td>{{ $monitor->id }}</td>
                    <td>{{ $monitor->modelo }}</td>
                    <td>{{ $monitor->serie}}</td>
                    <td>{{ $monitor->marca->nombre}}</td>
                    
                    
                    <td>
                        <form action="{{ route('monitores.destroy', $monitor->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/monitores/{{ $monitor->id }}/edit" class="btn btn-outline-info"><i class="fas fa-pen"></i>&nbsp;EDITAR</a>&nbsp;&nbsp;
                                                        
                            <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash"></i>&nbsp;ELIMINAR</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      
</div>

    
@stop

