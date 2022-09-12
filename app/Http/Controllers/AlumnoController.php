<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;


class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumno=Alumno::all();

        return view('alumno.index',compact('alumno'));
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
        Alumno::saveAlumno($request);
        return redirect()->to('alumno')->with(['type' => 'success', 'message' => 'Registro guardado con exito !!']);
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
        

        Alumno::updateAlumno($request, $id);
        return response()->json(['codigo' => 1, 'message' => 'Registro guardado con exito !!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno=Alumno::find($id);
        $alumno->delete();
        return redirect()->to('alumno')->with(['type'=>'error','message'=>'Cliente Eliminado']);
    }
}
