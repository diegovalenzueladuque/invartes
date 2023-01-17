@extends('adminlte::page')

@section('title', 'Unidades')

@section('content_header')

<div class="container-fluid">
    <h3 class="shadow text-center text-light rounded bg-dark" style="width: 18rem;"><b>UNIDADES</b></h3>
</div><br>
<div class="container">
    <a href="{{ route('unidades.create') }}" class="btn btn-outline-primary">CREAR</a><br><br>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
            
           
          </tr>
        </thead>
        
        <tbody>
            @foreach ($unidades as $unidad)
                <tr>
                    <td>{{ $unidad->id }}</td>
                    <td>{{ $unidad->nombre }}</td>
                    
                                
                    
                    <td>
                        <form action="{{ route('unidades.destroy', $unidad->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/unidades/{{ $unidad->id }}/edit" class="btn btn-outline-info"><i class="fas fa-pen"></i>&nbsp;EDITAR</a>&nbsp;&nbsp;
                            
                            
                            <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash"></i>&nbsp;ELIMINAR</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      
</div>

    
@stop

