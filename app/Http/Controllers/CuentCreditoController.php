<?php

namespace App\Http\Controllers;

use App\Models\CuentCredito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CreCredito;

class CuentCreditoController extends Controller
{

    public function index()
    {

        $cuentacredito = CuentCredito::getVentaCredito();
        $verificarcredito = CreCredito::VerificarExist();
        // dd($cuentacredito);
        // foreach ($cuentacredito as $cuentacreditos) {
        //     if (in_array($cuentacreditos->id,$verificarcredito)) {
        //         dd('true');
        //     } else {
        //         dd('false');
        //     }
        // }
        // dd($verificarcredito);
        return view('cre_cuenta_credito.index', compact('cuentacredito', 'verificarcredito'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        // dd($request);
        $rules = [
            'fecha_solicitud' => 'required',
            'monto' => 'required',
            'plazo' => 'required',
            'interes' => 'required',
            'cuota_mesual' => 'required',

        ];
        $messages = [
            'fecha_solicitud.required' => 'fecha required',
            'monto.required' => 'monto required',
            'plazo.required' => 'plazo required',
            'interes.required' => 'interes required',
            'cuota_mesual.required' => 'cuota mensual required',
        ];

        $this->validate($request, $rules, $messages);
        try {

            CreCredito::procedureCrearCredito($request);
            $credito = CreCredito::all();
            return view('credito.index', compact($credito));
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'No se puede generar otro credito a una misma cuenta por cobrar.');
        }
    }


    public function show($id)
    {
        // dd($id);
        $credito = CreCredito::buscarCredito($id);
        return view('cre_cuenta_credito.creditoxcuenta', compact('credito'));
    }


    public function edit($id)
    {

        $cuenta = CuentCredito::getCuentaCredito($id);

        // $credito = CreCredito::all();
        return view('cre_cuenta_credito.create', compact('cuenta'));

        // return view('credito.create',compact('cuenta'));
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
