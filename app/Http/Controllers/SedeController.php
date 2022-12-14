<?php

namespace App\Http\Controllers;

use App\Models\Sede;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sede = Sede::all();
        return view('sedes.index')->with('sedes', $sede);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sedes.create');
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
            'direccion' => 'required',

        ]);
        $sede = new Sede();
        $sede->nombre = $request->get('nombre');
        $sede->direccion = $request->get('direccion');
        $sede->save();

        return redirect('/sedes')->with('success','Sede ha sido creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function show(Sede $id)
    {
        $sede = Sede::find($id);
       return view('sedes.index')->with('sedes', $sede);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sede = Sede::findorFail($id);
        //return $sede;
        return view('sedes.edit', compact('sede'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sede = Sede::findorFail($id);
        $sede->nombre = $request->input('nombre');
        $sede->direccion = $request->input('direccion');
        
        $sede->save();
        return redirect('/sedes')->with('success','Sede ha sido modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Sede::destroy($id);
        return redirect('/sedes')->with('success', 'Sede Eliminada');
    }
}
