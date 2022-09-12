<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Profesor;
use App\Models\Curso;
use App\Models\Materia;
use App\Models\Nivel;
use App\Models\Grupo;
use App\Models\Inscripcion;





class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curso=Curso::with('alumno','profesor','grupo')->get();

        // dd($inscripcion);
        $alumno=Alumno::all();
        $grupo=Grupo::all();

        $profesor=Profesor::all();

        // $buscarM= getmateria();
        return view('curso.index',compact('curso','alumno','profesor','grupo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materia=Materia::all();
        $profesor=Profesor::all();

        $grupo=Grupo::all();

        return view('curso.crear',compact('materia','grupo','profesor'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        Curso::create($request->all());
        $curso=Curso::all();
    
        // dd($inscripcion);
        $alumno=Alumno::all();
        $profesor=Profesor::all();

        return view('curso.index',compact('curso','alumno','profesor'));

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso=Curso::findOrFail($id);
        $curso->delete();
        return redirect()->to('curso')->with(['type' =>'error','message'=>'Cliente Eliminado']);
    }
    public function buscarmateria(Request $request, $id)
    {
            if ($request->ajax()) {
                $nivel=Nivel::getNivel($id);
                return response()->json($nivel);
            }
  
    }
    public function buscaralumno(Request $request, $id)
    {
            if ($request->ajax()) {
                $alumno=Inscripcion::getAlumno($id);
                return response()->json($alumno);
            }
  
    }
}
