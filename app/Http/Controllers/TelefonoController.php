<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Telefono;
use Illuminate\Http\Request;

class TelefonoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telefonos = Telefono::with('marca')->get();
        return view('telefonos.index', compact('telefonos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::all();
        
        return view('telefonos.create', compact('marcas'));
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
            'anexo' => 'required',
            'marca_id' => 'required',
            'modelo' => 'required',
            'tipo' => 'required',
            'macaddress' => 'required',
            'ip' => 'required',
            'serie' => 'required',
            
        ]);
        $telefonos = new Telefono();
        $telefonos->anexo = $request->get('anexo');
        $telefonos->marca_id = $request->get('marca_id');
        $telefonos->modelo = $request->get('modelo');
        $telefonos->tipo = $request->get('tipo');
        $telefonos->macaddress = $request->get('macaddress');
        $telefonos->ip = $request->get('ip');
        $telefonos->serie = $request->get('serie');
        
        
        $telefonos->save();

        return redirect('/telefonos')->with('success','Teléfono agregado');
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
        $telefonos = Telefono::findorFail($id);
        $marcas = Marca::all();
        
        
        return view('telefonos.edit', compact('telefonos', 'marcas'));
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
        $telefonos = Telefono::findorFail($id);
        $telefonos->anexo = $request->get('anexo');
        $telefonos->marca_id = $request->get('marca_id');
        $telefonos->modelo = $request->get('modelo');
        $telefonos->tipo = $request->get('tipo');
        $telefonos->macaddress = $request->get('macaddress');
        $telefonos->ip = $request->get('ip');
        $telefonos->serie = $request->get('serie');
        
        
        $telefonos->save();

        return redirect('/telefonos')->with('success','Teléfono actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $telefonos = Telefono::find($id);
        $telefonos->delete();
        return redirect('/telefonos')->with('success', 'Teléfono eliminado');
    }
}
