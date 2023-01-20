<?php

namespace App\Http\Controllers;

use App\Models\Computador;

use App\Models\Funcionario;
use App\Models\Impresora;
use App\Models\Marca;
use App\Models\Monitor;
use App\Models\Sistema;
use App\Models\Telefono;
use Illuminate\Http\Request;

class ComputadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computadores = Computador::with('marcas')->get();
        $marcas = Marca::all();
        $funcionarios = Funcionario::all();
        return view('computadores.index', compact('computadores', 'funcionarios'));


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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
