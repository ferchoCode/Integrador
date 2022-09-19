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
            return view('reporte.index');
    }
}
