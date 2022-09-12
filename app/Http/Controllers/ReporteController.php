<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Curso;
use App\Models\Nivel;
use App\Models\Grupo;

use App\Models\Inscripcion;




class ReporteController extends Controller
{
    public function index(Request $request)
    {
        $grupo=Grupo::all();
           
            $curso= Curso::getGrupoReporte();
            // dd($curso[0]->grupo->nombre);
            // foreach($curso as $cursos) {
            //     $alumno = $cursos->id;
            //     $nivelId = $cursos->nivel;

            //     // array_push($ArrayMaterias,$alumno);

            //     $grupo= Curso::getGrupoReporte($alumno,$nivelId);
            //     array_push($ArrayGrupo,$grupo);
       
            //     // foreach($grupo as $grupos) {
            //     //     $nombre = $grupos->nombre;
            //     //     array_push($ArrayGrupo,$nombre);
            //     // }
            // }
    
            return view('reporte.index',compact('curso','grupo'));
    }

    // public function searchmascota(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $mascota = Mascota::searchMascota($request);

    //         return Response(view('reporte.tabla', compact('mascota')));
    //     } 
    // }
    public function buscagrupo(Request $request,$id)
    {

        if ($request->ajax()) {
        $reporte=Curso::buscarXgrupo($id);
        //return Response(view('reporte.tabla', compact('reporte')));
        return response()->json($reporte);
        } 
    }
}
