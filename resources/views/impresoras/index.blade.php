@extends('adminlte::page')

@section('title', 'Impresoras')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center text-light rounded" style="width: 12rem;background: rgb(35,34,40);
    background: linear-gradient(90deg, rgba(35,34,40,1) 0%, rgba(75,75,83,1) 35%, rgba(208,209,209,1) 100%);"><b>IMPRESORAS</b></h1>
</div><br>
<div class="container">
    <a href="{{ route('impresoras.create') }}" class="btn btn-outline-primary">CREAR</a>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Modelo</th>
            <th scope="col">Serie</th>
            <th scope="col">Marca</th>
            <th scope="col">Conexión</th>
            

            
           
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
                            <i class="fas fa-pen"></i>&nbsp;<a href="/impresoras/{{ $impresora->id }}/edit" class="btn btn-outline-info">EDITAR</a>&nbsp;&nbsp;
                            
                            
                            <i class="fas fa-trash"></i>&nbsp;<button type="submit" class="btn btn-outline-danger">ELIMINAR</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      
</div>

    
@stop

