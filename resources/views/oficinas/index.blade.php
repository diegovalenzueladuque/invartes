@extends('adminlte::page')

@section('title', 'Oficinas')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center rounded btn btn-outline-secondary" style="width: 18rem;">OFICINAS</h1>
</div><br>
<div class="container">
    <a href="{{ route('oficinas.create') }}" class="btn btn-outline-primary">CREAR</a><br><br>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Unidad</th>
            <th scope="col">Sede</th>
            <th scope="col">Creado</th>
            <th scope="col">Acciones</th>        
           
          </tr>
        </thead>
        
        <tbody>
            @foreach ($oficinas as $oficina)
                <tr>
                    <td>{{ $oficina->id }}</td>
                    <td>{{ $oficina->nombre }}</td>
                    <td>{{ $oficina->unidad->nombre }}</td>
                    <td>{{ $oficina->sede->nombre }}</td>
                    <td>{{ $oficina->created_at->format('d-m-Y-H:i:s') }}</td>
                    <td>
                        <form action="{{ route('oficinas.destroy', $oficina->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/oficinas/{{ $oficina->id }}/edit" class="btn btn-outline-info"><i class="fas fa-pen"></i>&nbsp;EDITAR</a>&nbsp;&nbsp;
                            
                            
                            <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash"></i>&nbsp;ELIMINAR</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      
</div>

    
@stop

