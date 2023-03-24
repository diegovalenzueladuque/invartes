<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PdfController extends Controller
{
    public function generarpdf(){
        $computadores = DB::table('computadors')
        ->join('funcionarios', 'computadors.funcionario_id', '=', 'funcionarios.id')
        ->join('sistemas', 'computadors.sistema_id', '=', 'sistemas.id' )
        ->join('unidads', 'funcionarios.unidad_id', '=', 'unidads.id')
        ->select(['codigo as Etiqueta', 'cpu as Procesador', 'ram as Memoria', 'funcionarios.nombre as Usuario', 'sistemas.nombre as Sistema Operativo', 'unidads.nombre as Unidad'])
        ->get();
            /*->join ('marcas', 'marca_id as Marca', '=', 'marcas.id')
            ->select('codigo as Etiqueta', 'cpu as Procesador', )*/
        //$pdf = Pdf::loadView('/computadores/pdf', ['computadores'=>$computadores]);
        dd($computadores);
        //return $pdf->stream();
        
    }
}
