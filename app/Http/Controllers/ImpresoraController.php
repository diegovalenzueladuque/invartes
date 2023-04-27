<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;
use App\Models\Impresora;

class ImpresoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $impresoras = Impresora::with('marca')->get();
        return view('impresoras.index', compact('impresoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::all();
        $impresoras = Impresora::all();
        return view('impresoras.create', compact('impresoras','marcas'));
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
            'serie' => 'required|unique:impresoras',
            'marca_id' => 'required',
            'Conexion' => 'required',    
        ]);
        $impresoras = new Impresora();
        $impresoras->modelo = $request->get('modelo');
        $impresoras->serie = $request->get('serie');
        $impresoras->marca_id = $request->get('marca_id');
        $impresoras->Conexion = $request->get('Conexion');
        $impresoras->save();

        return redirect('/impresoras')->with('success','Impresora agregada');
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
        $impresoras = Impresora::findorFail($id);
        $marcas = Marca::all();
        
        
        return view('impresoras.edit', compact('impresoras', 'marcas'));
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
            'Conexion' => 'required',    
        ]);$impresoras = Impresora::findorFail($id);
        $impresoras->modelo = $request->input('modelo');
        $impresoras->serie = $request->get('serie');
        $impresoras->marca_id = $request->get('marca_id');
        $impresoras->Conexion = $request->get('Conexion');
        $impresoras->save();
        return redirect('/impresoras')->with('success','impresora ha sido modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $impresoras = Impresora::find($id);
        $impresoras->delete();
        return redirect('/impresoras')->with('success', 'Impresora Eliminada');
    }
}
