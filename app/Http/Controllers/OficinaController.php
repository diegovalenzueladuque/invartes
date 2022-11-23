<?php

namespace App\Http\Controllers;


use App\Models\Oficina;
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
        $oficina = Oficina::all();
       return view('oficinas.index')->with('oficinas', $oficina);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('oficinas.create')->with('oficinas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $oficina = new Oficina();
        $oficina->nombre = $request->get('nombre');
        
        $oficina->save();

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
        $oficina = Oficina::findorFail($id);
        //return $rol;
        return view('oficinas.edit',compact('oficina'));
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
        $oficina = Oficina::findorFail($id);
        $oficina->nombre = $request->input('nombre');
        
        $oficina->save();
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
        Oficina::destroy($id);
        return redirect('/oficinas')->with('success', 'Oficina Eliminada');
    }
}
