<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Nivel;
use App\Models\Materia;
use App\Models\Inscripcion;


class InscripcionController extends Controller
{
    public function index()
    {
        $inscripcion=Inscripcion::all();
        // dd($inscripcion);
        $alumno=Alumno::all();
        $materia=Materia::all();
        // $buscarM= getmateria();
        return view('inscripcion.index',compact('inscripcion','alumno','materia'));
        
    }

    public function store(Request $request)
    {   
        Inscripcion::create($request->all());
        return redirect()->to('inscripcion')->with(['type' => 'success', 'message' => 'Registro guardado con exito !!']);
    }
    public function destroy($id)
    {
        $inscripcion=Inscripcion::findOrFail($id);
        $inscripcion->delete();
        return redirect()->to('inscripcion')->with(['type' =>'error','message'=>'Cliente Eliminado']);
    }

    public function buscarmateria(Request $request, $id)
    {
            if ($request->ajax()) {
                $nivel=Nivel::getNivel($id);
                return response()->json($nivel);
            }else{
                $nivel=Nivel::getNivel($id);
                return response()->json($nivel);
    
            }
  
    }

   


    
}
