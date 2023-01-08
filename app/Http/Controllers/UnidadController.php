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
        $unidades = Unidad::with(['sede'])->get();
        return view('unidades.index', compact('unidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $sedes = Sede::all();
        return view('unidades.create', compact('sedes'));
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
            
            'sede_id' => 'required',

        ]);
        $unidad = new Unidad();
        $unidad->nombre = $request->get('nombre');
        
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
    public function edit($id)
    {
        $unidades = Unidad::findorFail($id);
        
        $sedes = Sede::all();
        return view('unidades.edit', compact('unidades', 'sedes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $unidad = Unidad::findorFail($id);
        $unidad->nombre = $request->input('nombre');
        
        $unidad->sede_id = $request->input('sede_id');
        
        $unidad->save();

        return redirect('/unidades')->with('success','Unidad actualizada');
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


