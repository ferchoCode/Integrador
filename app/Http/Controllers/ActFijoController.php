<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\ActFijo;
use App\Models\ActArea;
use App\Models\ActCategoria;


class ActFijoController extends Controller
{
   
    public function index()
    {        
        $activo=ActFijo::with('categoria','area')->get();
        $categoria=ActCategoria::all();
        $area=ActArea::all();

        // dd(($activo));
        return view('act_fijo.index',compact('activo','categoria','area'));

    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        // dd($request);
        ActFijo::procedure($request);
        return redirect()->to('act_fijo')->with('success','Activo Registrado');
        // return redirect()->to('act_fijo')->with(['type'=>'success','message'=>'Activo Registrado']);
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
