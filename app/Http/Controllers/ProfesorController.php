<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;


class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesor=Profesor::all();
        return view('profesor.index',compact('profesor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profesor =new Profesor($request->input());   
        $profesor->save();
        return redirect()->to('profesor')->with(['type' => 'success', 'message' => 'Registro guardado con exito !!']);
    
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
        //
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
        $profesor=Profesor::findOrFail($id);
        $profesor->update($request->all());

        return redirect()->to('profesor')->with(['type' => 'success', 'message' => 'Registro guardado con exito !!']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesor=Profesor::findOrFail($id);
        $profesor->delete();
        return redirect()->to('alumno')->with(['type'=>'error','message'=>'Cliente Eliminado']);

    }
}
