@extends('adminlte::page')

@section('title', 'Impresoras')

@section('content_header')

<div class="container-fluid">
    <h3 class="shadow text-center text-light rounded bg-dark" style="width: 18rem;"><b>IMPRESORAS</b></h3>
</div><br>
<div class="container">
    <a href="{{ route('impresoras.create') }}" class="btn btn-outline-primary">CREAR</a><br><br>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Modelo</th>
            <th scope="col">Serie</th>
            <th scope="col">Marca</th>
            <th scope="col">Conexión</th>
            <th scope="col">Acciones</th>     
           
          </tr>
        </thead>
        
        <tbody>
            @foreach ($impresoras as $impresora)
                <tr>
                    <td>{{ $impresora->id }}</td>
                    <td>{{ $impresora->modelo }}</td>
                    <td>{{ $impresora->serie}}</td>
                    <td>{{ $impresora->marca->nombre}}</td>
                    <td>{{ $impresora->Conexion}}</td>
                    
                    <td>
                        <form action="{{ route('impresoras.destroy', $impresora->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/impresoras/{{ $impresora->id }}/edit" class="btn btn-outline-info"><i class="fas fa-pen"></i>&nbsp;EDITAR</a>&nbsp;&nbsp;
                                                        
                            <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash"></i>&nbsp;ELIMINAR</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      
</div>

    
@stop
