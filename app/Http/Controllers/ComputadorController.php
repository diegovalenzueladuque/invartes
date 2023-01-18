<?php

namespace App\Http\Controllers;

use App\Models\Computador;
use App\Models\Detalle;
use App\Models\Funcionario;
use App\Models\Marca;
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
        $computadores = Computador::with('detalles')->get();
        $detalle = Detalle::all();
        return view('computadores.index', compact('computadores', 'detalle'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $computadores = Computador::all();
        $detalle = Detalle::all();
        $funcionarios = Funcionario::all();
        $marcas = Marca::all();
        $telefonos = Telefono::all();
        return view('computadores.create', compact('detalles','funcionarios', 'marcas', 'telefonos'));
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
