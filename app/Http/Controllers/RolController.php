<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $rols = Rol::all();
       return view('roles.index')->with('roles', $rols);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rols = new Rol();
        $rols->nombre = $request->get('nombre');
        
        $rols->save();

        return redirect('/roles')->with('success','Rol ha sido creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $id)
    {
        $rols = Rol::find($id);
       return view('roles.index')->with('roles', $rols);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rol = Rol::findorFail($id);
        //return $rol;
        return view('roles.edit',compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $rol = Rol::findorFail($id);
        $rol->nombre = $request->input('nombre');
        
        $rol->save();
        return redirect('/roles')->with('success','Rol ha sido modificado');
        
        /*return redirect('/roles')->with('success','Rol Actualizado');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //Rol::find($id)->delete();
        Rol::destroy($id);
        return redirect('/roles')->with('success', 'Rol Eliminado');
    }
}
