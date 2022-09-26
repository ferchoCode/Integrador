<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActActualizacion;
use App\Models\ActFijo;

class ActActualizacionController extends Controller
{

    public function index()
    {
        $actualizacion= ActActualizacion::all();
        return view('act_actualizacion.index',compact('actualizacion'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {

        $activo = ActFijo::findOrFail($id);

        $actualizacion= ActActualizacion::buscarActivo($id);
        return view('act_actualizacion.index',compact('activo','actualizacion'));
    }

    public function update(Request $request, $id)
    {
        try {
         ActActualizacion::procActualizar($request,$id);
            return back()->withInput();
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'No se puede realizar una depreciacion dado que no cumple con las normas. El periodo de fechas en que se realiza la depreciacion no cumple con el minimo de 12 meses');
        }
    }


    public function destroy($id)
    {
        //
    }
}
