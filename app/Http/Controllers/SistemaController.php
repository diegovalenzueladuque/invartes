<?php

namespace App\Http\Controllers;

use App\Models\Sistema;
use Illuminate\Http\Request;

class SistemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sistemas = Sistema::all();
       return view('sistemas.index')->with('sistemas', $sistemas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sistemas.create');
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

        ]);
        $sistemas = new Sistema();
        $sistemas->nombre = $request->get('nombre');
        
        $sistemas->save();

        return redirect('/sistemas')->with('success','Sistema ha sido creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sistema  $sistema
     * @return \Illuminate\Http\Response
     */
    public function show(Sistema $id)
    {
        $sistemas = Sistema::find($id);
       return view('sistemas.index')->with('sistemas', $sistemas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sistema  $sistema
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sistemas = Sistema::findorFail($id);
        //return $rol;
        return view('sistemas.edit',compact('sistemas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sistema  $sistema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sistemas = Sistema::findorFail($id);
        $sistemas->nombre = $request->input('nombre');
        
        $sistemas->save();
        return redirect('/sistemas')->with('success','Sistema ha sido modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sistema  $sistema
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Sistema::destroy($id);
        return redirect('/sistemas')->with('success', 'Sistema Eliminado');
    }
}
