@extends('adminlte::page')

@section('title', 'Sistemas')

@section('content_header')

<div class="container-fluid">
    <h3 class="shadow text-center text-light rounded bg-dark" style="width: 18rem;"><b>SISTEMAS</b></h3>
</div><br>
<div class="container">
    <a href="{{ route('sistemas.create') }}" class="btn btn-outline-primary">CREAR</a><br><br>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
           
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
                            <a href="/sistemas/{{ $sistema->id }}/edit" class="btn btn-outline-info"><i class="fas fa-pen"></i>&nbsp;EDITAR</a>&nbsp;&nbsp;
                            
                            
                            <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash"></i>&nbsp;ELIMINAR</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      
</div>

    
@stop

