<?php

namespace App\Http\Controllers;

use App\Models\Computador;
use Illuminate\Support\Facades\DB;
use App\Models\Funcionario;
use App\Models\Impresora;
use App\Models\Marca;
use App\Models\Monitor;
use App\Models\Sistema;
use App\Models\Telefono;
use App\Models\Unidad;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ComputadorsExport;

class ComputadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computadores = Computador::all();
        
        return view('computadores.index', compact('computadores'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $computadores = Computador::all();
        $sistemas = Sistema::all();
        $funcionarios = Funcionario::all();
        $marcas = Marca::all();
        $telefonos = Telefono::all();
        $impresoras = Impresora::all();
        $monitores = Monitor::all();
        return view('computadores.create', compact('funcionarios', 'marcas', 'telefonos', 'sistemas', 'impresoras', 'monitores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'codigo' => 'required|unique:computadors',
            'serie' => 'required|unique:computadors',
            'cpu' => 'required',
            'ram' => 'required',
            'sistema_id' => 'required',
            'macaddress' => 'required|unique:computadors',
            'ip' => 'required',
            'marca_id' => 'required',
            'funcionario_id' => 'required',
            'telefono_id' => 'required',
            'impresora_id' => 'required',
            'monitor_id' => 'required',
        ]);
        $computadores = new Computador();
        $computadores->codigo = $request->get('codigo');
        $computadores->serie = $request->get('serie');
        $computadores->cpu = $request->get('cpu');
        $computadores->ram = $request->get('ram');
        $computadores->sistema_id = $request->get('sistema_id');
        $computadores->macaddress = $request->get('macaddress');
        $computadores->ip = $request->get('ip');
        $computadores->marca_id = $request->get('marca_id');
        $computadores->funcionario_id = $request->get('funcionario_id');
        $computadores->telefono_id = $request->get('telefono_id');
        $computadores->impresora_id = $request->get('impresora_id');
        $computadores->monitor_id = $request->get('monitor_id');
        
        $computadores->save();

        return redirect('/computadores')->with('success','Computador agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $computadores = Computador::findorFail($id);
        $sistemas = Sistema::all();
        $marcas = Marca::all();
        $telefonos = Telefono::all();
        $funcionarios = Funcionario::all();
        $impresoras = Impresora::all();
        $monitores = Monitor::all();
        return view('computadores.show', compact('computadores', 'sistemas', 'marcas', 'telefonos', 'funcionarios', 'impresoras', 'monitores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $computadores = Computador::findorFail($id);
        $sistemas = Sistema::all();
        $marcas = Marca::all();
        $telefonos = Telefono::all();
        $funcionarios = Funcionario::all();
        $impresoras = Impresora::all();
        $monitores = Monitor::all();
        return view('computadores.edit', compact('computadores', 'sistemas', 'marcas', 'telefonos', 'funcionarios', 'impresoras', 'monitores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'codigo' => 'required|unique:computadors',
            'serie' => 'required|unique:computadors',
            'cpu' => 'required',
            'ram' => 'required',
            'sistema_id' => 'required',
            'macaddress' => 'required|unique:computadors',
            'ip' => 'required',
            'marca_id' => 'required',
            'funcionario_id' => 'required',
            'telefono_id' => 'required',
            'impresora_id' => 'required',
            'monitor_id' => 'required',
        ]);
        $computadores = Computador::findorFail($id);
        $computadores->codigo = $request->get('codigo');
        $computadores->serie = $request->get('serie');
        $computadores->cpu = $request->get('cpu');
        $computadores->ram = $request->get('ram');
        $computadores->sistema_id = $request->get('sistema_id');
        $computadores->macaddress = $request->get('macaddress');
        $computadores->ip = $request->get('ip');
        $computadores->marca_id = $request->get('marca_id');
        $computadores->funcionario_id = $request->get('funcionario_id');
        $computadores->telefono_id = $request->get('telefono_id');
        $computadores->impresora_id = $request->get('impresora_id');
        $computadores->monitor_id = $request->get('monitor_id');
        
        $computadores->save();

        return redirect('/computadores')->with('success','Computador actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $computadores = Computador::findorFail($id);
        $computadores->delete();
        return redirect('computadores')->with('Success', 'Computador Eliminado');
    }

    public function chart(){
        $computadores = Computador::all();
        $datos = [];
        $contxsist = Computador::withCount('sistemas')->withTrashed()->get();

        foreach($computadores as $computador){
            $datos['label'][] = $computador->id->count();
            $datos['data'][] = $computador->funcionario_id->unidad->count();

        }
        $datos['data'] = json_encode($datos);
        return view('/', $datos);
    }

    public function generarpdf(){
        $computadores = DB::table('computadors')
        ->join('funcionarios', 'computadors.funcionario_id', '=', 'funcionarios.id')
        ->join('sistemas', 'computadors.sistema_id', '=', 'sistemas.id' )
        ->join('unidads', 'funcionarios.unidad_id', '=', 'unidads.id')
        ->join('marcas', 'computadors.marca_id', '=', 'marcas.id')
        ->select('codigo as Etiqueta', 'marcas.nombre as Marca', 'cpu as Procesador', 'ram as Memoria',  'sistemas.nombre as Sistema', 'unidads.nombre as Unidad')
        ->orderBy('computadors.id')
        ->get();
        
                    
        $pdf = PDF::loadView('/computadores.pdf', compact('computadores'));
        return $pdf->download('reporte.pdf');
        //dd($computadores);
        /*return response()->streamDownload(
            fn() => print($pdf),
            'reporte.pdf'
        );*/

        
    }

    public function exportExcel(){
        return Excel::download(new ComputadorsExport, 'computadores.xlsx');
    }

   

   
}
