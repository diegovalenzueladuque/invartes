@extends('adminlte::page')

@section('title', 'Mostrar Computador')

@section('content_header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>REPORTE COMPUTADORES</h1>
    <table>
        <tr>
            <th>ETIQUETA</th>
            <th>MARCA</th>
            <th>CPU</th>
            <th>MEMORIA</th>
            <th>FUNCIONARIO</th>
            <th>UNIDAD</th>

        </tr>
        @foreach ($computadores as $computador )
        <tr>
            <td>{{ $computador->codigo }}</td>
            <td>{{ $computador->marcas->nombre }}</td>
            <td>{{ $computador->cpu }}</td>
            <td>{{ $computador->ram }}</td>
            <td>{{ $computador->funcionarios->nombre }}</td>
            <td>{{ $computador->funcionarios->unidad->nombre }}</td>
        </tr>
        @endforeach
        
    </table>
</body>
</html>

    
@stop