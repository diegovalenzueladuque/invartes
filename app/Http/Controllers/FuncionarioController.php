<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\Rol;
use App\Models\Unidad;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::with('rol')->get();
        return view('funcionarios.index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Rol::all();
        $unidades = Unidad::all();
        return view('funcionarios.create', compact('roles','unidades'));
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
            'ap_paterno' => 'required',
            'ap_materno' => 'required',
            'rol_id' => 'required',
            'unidad_id' => 'required',

        ]);
        $funcionario = new Funcionario();
        $funcionario->nombre = $request->get('nombre');
        $funcionario->ap_paterno = $request->get('ap_paterno');
        $funcionario->ap_materno = $request->get('ap_materno');
        $funcionario->rol_id = $request->get('rol_id');
        $funcionario->unidad_id = $request->get('unidad_id');
        
        $funcionario->save();

        return redirect('/funcionarios')->with('success','Funcionario agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function show(Funcionario $funcionario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionarios = Funcionario::findorFail($id);
        $roles = Rol::all();
        $unidades = Unidad::all();
        return view('funcionarios.edit', compact('funcionarios', 'roles', 'unidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'ap_paterno' => 'required',
            'ap_materno' => 'required',
            'rol_id' => 'required',
            'unidad_id' => 'required',

        ]);
        $funcionario = Funcionario::findorFail($id);
        $funcionario->nombre = $request->get('nombre');
        $funcionario->ap_paterno = $request->get('ap_paterno');
        $funcionario->ap_materno = $request->get('ap_materno');
        $funcionario->rol_id = $request->get('rol_id');
        $funcionario->unidad_id = $request->get('unidad_id');
        
        $funcionario->save();

        return redirect('/funcionarios')->with('success','Funcionario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $funcionarios = Funcionario::find($id);
        $funcionarios->delete();
        return redirect('/funcionarios')->with('success', 'Funcionario Eliminado');
    }
}
