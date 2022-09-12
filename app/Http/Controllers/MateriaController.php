<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;


class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materia=Materia::all();
        return view('materia.index',compact('materia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materia = Materia::create($request->all());
        return redirect()->to('materia')->with(['type' => 'success', 'message' => 'Registro guardado con exito !!']);
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
        $materia=Materia::findOrFail($id);
        $materia->update($request->all());

        return redirect()->to('materia')->with(['type' => 'success', 'message' => 'Registro guardado con exito !!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materia=Materia::findOrFail($id);
        $materia->delete();
        return redirect()->to('materia')->with(['type'=>'error','message'=>'Cliente Eliminado']);
    }
}
