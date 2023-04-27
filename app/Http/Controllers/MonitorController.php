<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;
use App\Models\Monitor;
use Illuminate\Support\Facades\Validator;

class MonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monitores = Monitor::with('marca')->get();
        return view('monitores.index', compact('monitores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::all();
        $monitores = Monitor::all();
        return view('monitores.create', compact('monitores','marcas'));
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
            'modelo' => 'required',
            'serie' => 'required|unique:monitors',
            'marca_id' => 'required',            

        ]);
        $monitores = new Monitor();
        $monitores->modelo = $request->get('modelo');
        $monitores->serie = $request->get('serie');
        $monitores->marca_id = $request->get('marca_id');
        
        $monitores->save();

        return redirect('/monitores')->with('success','Monitor agregado');
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
        $marcas = Marca::all();
        $monitores = Monitor::findorFail($id);
        return view('monitores.edit', compact('monitores','marcas'));
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
            'modelo' => 'required',
            'serie' => 'required',
            'marca_id' => 'required',            

        ]);
        $monitores = Monitor::findorFail($id);
        $monitores->modelo = $request->get('modelo');
        $monitores->serie = $request->get('serie');
        $monitores->marca_id = $request->get('marca_id');
        
        $monitores->save();

        return redirect('/monitores')->with('success','Monitor actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $monitores = Monitor::find($id);
        $monitores->delete();
        return redirect('/monitores')->with('success', 'Monitor Eliminado');
    }
}
