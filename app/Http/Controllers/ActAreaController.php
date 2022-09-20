<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ActAreaController extends Controller
{
    public function index()
    {
        
        // $activo = ActFijo::getActivo();
        return view('act_fijo.index',compact('activo'));
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
