<table >
    <tr >
        <th>ETIQUETA</th>
        <th>MARCA</th>
        <th>CPU</th>
        <th>MEMORIA</th>            
        <th>SIST. OPERATIVO</th>
        <th>UNIDAD</th>

    </tr>
    @foreach ($computadores as $computador )
    <tr>
        <td>{{ $computador->Etiqueta }}</td>
        <td>{{ $computador->Marca }}</td>
        <td>{{ $computador->Procesador }}</td>
        <td>{{ $computador->Memoria}}</td>            
        <td>{{ $computador->Sistema }}</td>
        <td>{{ $computador->Unidad }}</td>
    </tr>
    @endforeach
    
</table>