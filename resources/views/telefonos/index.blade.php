@extends('adminlte::page')

@section('title', 'Teléfonos')

@section('content_header')

<div class="container-fluid">
    <h1 class="shadow text-center rounded btn btn-outline-secondary" style="width: 18rem;">TELÉFONOS</h1>
</div><br>
<div class="container">
    <a href="{{ route('telefonos.create') }}" class="btn btn-outline-primary"><i class="fas fa-user-plus"></i>&nbsp;CREAR</a><br><br>
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
            <th scope="col">Creado</th>
            <th scope="col">Acciones</th>
           
          </tr>
        </thead>
        
        <tbody>
            @foreach ($telefonos as $telefono)
                <tr>
                    <td>{{ $telefono->id }}</td>
                    <td>{{ $telefono->anexo }}</td>
                    <td>{{ $telefono->marca->nombre ?? ''}}</td>
                    <td>{{ $telefono->modelo}}</td>
                    <td>{{ $telefono->tipo}}</td>
                    <td>{{ $telefono->macaddress}}</td>
                    <td>{{ $telefono->ip}}</td>
                    <td>{{ $telefono->serie}}</td>
                    <td>{{ $telefono->created_at->format('d-m-Y-H:i:s') }}</td>
                    <td>
                        <form action="{{ route('telefonos.destroy', $telefono->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/telefonos/{{ $telefono->id }}/edit" class="btn btn-outline-info"><i class="fas fa-pen"></i>&nbsp;EDITAR</a>&nbsp;&nbsp;
                            
                            
                            <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash"></i>&nbsp;ELIMINAR</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      
</div>

    
@stop

