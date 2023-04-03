<?php

namespace App\Exports;

use App\Models\Computador;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

class ComputadorsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return  $computadores = DB::table('computadors')
        ->join('funcionarios', 'computadors.funcionario_id', '=', 'funcionarios.id')
        ->join('sistemas', 'computadors.sistema_id', '=', 'sistemas.id' )
        ->join('unidads', 'funcionarios.unidad_id', '=', 'unidads.id')
        ->join('marcas', 'computadors.marca_id', '=', 'marcas.id')
        ->select('codigo as Etiqueta', 'marcas.nombre as Marca', 'cpu as Procesador', 'ram as Memoria',  'sistemas.nombre as Sistema', 'unidads.nombre as Unidad')
        ->orderBy('computadors.id')
        ->get();
        
    }
}
