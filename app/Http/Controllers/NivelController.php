<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nivel;
use App\Models\Materia;


class NivelController extends Controller
{
 
    public function index()
    {
        $nivel=Nivel::all();
        $materia=Materia::all();
        
        return view('nivel.index',compact('nivel','materia'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $nivel = Nivel::create($request->all());
        return redirect()->to('nivel')->with(['type' => 'success', 'message' => 'Registro guardado con exito !!']);
    }


    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $nivel=Nivel::with('materia')->findOrFail($id);
        $materia=Materia::all();
        return view('nivel.edit',compact('nivel','materia'));
    }


    public function update(Request $request, $id)
    {
        $nivel=Nivel::findOrFail($id);
        $nivel->update($request->all());

        return redirect()->to('nivel')->with(['type' => 'success', 'message' => 'Registro guardado con exito !!']);
    }

  
    public function destroy($id)
    {
        $nivel=Nivel::findOrFail($id);
        $nivel->delete();
        return redirect()->to('nivel')->with(['type'=>'error','message'=>'Cliente Eliminado']);
    }
}
