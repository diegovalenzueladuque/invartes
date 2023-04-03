@extends('adminlte::page')

@section('title', 'Marcas')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center rounded btn btn-outline-secondary" style="width: 18rem;">MARCAS</h1>
</div><br>
<div class="container">
    <a href="{{ route('marcas.create') }}" class="btn btn-outline-primary"><i class="fas fa-user-plus"></i>&nbsp;CREAR</a><br><br>
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
            @foreach ($marcas as $marca)
                <tr>
                    <td>{{ $marca->id }}</td>
                    <td>{{ $marca->nombre }}</td>
                    <td>{{ $marca->created_at->format('d-m-Y-H:i:s') }}</td>
                    <td>
                        <form action="{{ route('marcas.destroy', $marca->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/marcas/{{ $marca->id }}/edit" class="btn btn-outline-info"><i class="fas fa-pen"></i>&nbsp;EDITAR</a>&nbsp;&nbsp;
                            
                            
                            <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash"></i>&nbsp;ELIMINAR</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      
</div>

    
@stop

