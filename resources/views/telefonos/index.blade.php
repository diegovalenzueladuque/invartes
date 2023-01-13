@extends('adminlte::page')

@section('title', 'Teléfonos')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center text-light rounded" style="width: 12rem;background: rgb(35,34,40);
    background: linear-gradient(90deg, rgba(35,34,40,1) 0%, rgba(75,75,83,1) 35%, rgba(208,209,209,1) 100%);"><b>TELÉFONOS</b></h1>
</div><br>
<div class="container">
    <a href="{{ route('telefonos.create') }}" class="btn btn-outline-primary">CREAR</a>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Anexo</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Tipo</th>
            <th scope="col">Mac Address</th>
            <th scope="col">IP</th>
            <th scope="col">Serie</th>
            
           
          </tr>
        </thead>
        
        <tbody>
            @foreach ($telefonos as $telefono)
                <tr>
                    <td>{{ $telefono->id }}</td>
                    <td>{{ $telefono->anexo }}</td>
                    <td>{{ $telefono->marca->nombre}}</td>
                    <td>{{ $telefono->modelo}}</td>
                    <td>{{ $telefono->tipo}}</td>
                    <td>{{ $telefono->macaddress}}</td>
                    <td>{{ $telefono->ip}}</td>
                    <td>{{ $telefono->serie}}</td>
                    
                    <td>
                        <form action="{{ route('telefonos.destroy', $telefono->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <i class="fas fa-pen"></i>&nbsp;<a href="/telefonos/{{ $telefono->id }}/edit" class="btn btn-outline-info">EDITAR</a>&nbsp;&nbsp;
                            
                            
                            <i class="fas fa-trash"></i>&nbsp;<button type="submit" class="btn btn-outline-danger">ELIMINAR</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      
</div>

    
@stop

