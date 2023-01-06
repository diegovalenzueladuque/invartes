<?php

namespace App\Http\Controllers;

use App\Models\Oficina;
use App\Models\Sede;
use App\Models\Unidad;
use Illuminate\Http\Request;

class UnidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidades = Unidad::with(['oficina','sede'])->get();
        return view('unidades.index', compact('unidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $oficinas = Oficina::all();
        $sedes = Sede::all();
        return view('unidades.create', compact('oficinas','sedes'));
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
            'nombre' => 'required',
            'oficina_id' => 'required',
            'sede_id' => 'required',

        ]);
        $unidad = new Unidad();
        $unidad->nombre = $request->get('nombre');
        $unidad->oficina_id = $request->get('oficina_id');
        $unidad->sede_id = $request->get('sede_id');
        
        $unidad->save();

        return redirect('/unidades')->with('success','Unidad creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function show(Unidad $unidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Unidad $unidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unidad $unidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unidad = Unidad::find($id);
        $unidad->delete();

        return redirect('/unidades')->with('success', 'Unidad Eliminada');
    }
}

