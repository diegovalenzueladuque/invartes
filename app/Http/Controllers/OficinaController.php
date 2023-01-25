<?php

namespace App\Http\Controllers;


use App\Models\Oficina;
use App\Models\Sede;
use App\Models\Unidad;
use Illuminate\Http\Request;

class OficinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oficinas = Oficina::with('unidad')->get();
        return view('oficinas.index', compact('oficinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidades = Unidad::all();
        $sedes = Sede::all();
        return view('oficinas.create', compact('unidades', 'sedes'));
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
            'unidad_id' => 'required',
            'sede_id' => 'required',

        ]);
        $oficinas = new Oficina();
        $oficinas->nombre = $request->get('nombre');
        $oficinas->unidad_id = $request->get('unidad_id');
        $oficinas->sede_id = $request->get('sede_id');
        $oficinas->save();

        return redirect('/oficinas')->with('success','Oficinas creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oficina  $oficina
     * @return \Illuminate\Http\Response
     */
    public function show(Oficina $id)
    {
        $oficina = Oficina::find($id);
        return view('oficinas.index')->with('roles', $oficina);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oficina  $oficina
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oficinas = Oficina::findorFail($id);
        $unidades = Unidad::all();
        $sedes = Sede::all();
        
        return view('oficinas.edit', compact('oficinas', 'unidades', 'sedes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oficina  $oficina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $oficinas = Oficina::findorFail($id);
        $oficinas->nombre = $request->input('nombre');
        $oficinas->unidad_id = $request->get('unidad_id');
        $oficinas->sede_id = $request->get('sede_id');
        $oficinas->save();
        return redirect('/oficinas')->with('success','Oficina ha sido modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oficina  $oficina
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oficina = Oficina::find($id);
        $oficina->delete();
        return redirect('/oficinas')->with('success', 'Oficina Eliminada');
    }
}
