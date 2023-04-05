
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div><img src="https://escudouchile.files.wordpress.com/2012/05/escudo-universidad-de-chile-lineal-2.png" style="width: 40%; margin-top: -60px; margin-bottom: 200px;" align="right" alt=""></div><br>
    <div style="margin-bottom: 120px; margin-top: 60px;"><h1 style="text-align:center; color:#08315e; font-size: 2rem; border:solid black 1px; border-radius: 12px; background-color:#b3b3b4; font-weight: bold; width:45%">REPORTE COMPUTADORES</h1></div><br>
    <table class="table table-hover">
        <tr style="border-radius: 8px">
            <th style="text-align:center; color:#000; font-size: 1,5rem; border:solid black 1px; background-color:#b3b3b4; font-weight: bold; ">ETIQUETA</th>
            <th style="text-align:center; color:#000; font-size: 1,5rem; border:solid black 1px; background-color:#b3b3b4; font-weight: bold; ">MARCA</th>
            <th style="text-align:center; color:#000; font-size: 1,5rem; border:solid black 1px; background-color:#b3b3b4; font-weight: bold; ">CPU</th>
            <th style="text-align:center; color:#000; font-size: 1,5rem; border:solid black 1px; background-color:#b3b3b4; font-weight: bold; ">MEMORIA</th>            
            <th style="text-align:center; color:#000; font-size: 1,5rem; border:solid black 1px; background-color:#b3b3b4; font-weight: bold; ">SIST. OPERATIVO</th>
            <th style="text-align:center; color:#000; font-size: 1,5rem; border:solid black 1px; background-color:#b3b3b4; font-weight: bold; ">NOMBRE</th>
            <th style="text-align:center; color:#000; font-size: 1,5rem; border:solid black 1px; background-color:#b3b3b4; font-weight: bold; ">APELLIDO</th>
            <th style="text-align:center; color:#000; font-size: 1,5rem; border:solid black 1px; background-color:#b3b3b4; font-weight: bold; ">UNIDAD</th>

        </tr>
        @foreach ($computadores as $computador )
        <tr>
            <td style="text-align:center; color:#000; font-size: 1rem; border:solid black 1px; ">{{ $computador->Etiqueta }}</td>
            <td style="text-align:center; color:#000; font-size: 1rem; border:solid black 1px; ">{{ $computador->Marca }}</td>
            <td style="text-align:center; color:#000; font-size: 1rem; border:solid black 1px; ">{{ $computador->Procesador }}</td>
            <td style="text-align:center; color:#000; font-size: 1rem; border:solid black 1px; ">{{ $computador->Memoria}}</td>            
            <td style="text-align:center; color:#000; font-size: 1rem; border:solid black 1px; ">{{ $computador->Sistema }}</td>
            <td style="text-align:center; color:#000; font-size: 1rem; border:solid black 1px; ">{{ $computador->Nombre }}</td>
            <td style="text-align:center; color:#000; font-size: 1rem; border:solid black 1px; ">{{ $computador->Apellido }}</td>
            <td style="text-align:center; color:#000; font-size: 1rem; border:solid black 1px; ">{{ $computador->Unidad }}</td>
        </tr>
        @endforeach
        
    </table>
</body>
</html>

    
