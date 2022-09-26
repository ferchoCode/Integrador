<?php

namespace App\Http\Controllers;

use App\Models\CreCredito;
use App\Models\Cuotas;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CreCreditoController extends Controller
{

    public function index()
    {
        $credito = CreCredito::getCredito();
        return view('credito.index', compact('credito'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        // CreCredito::procedureCrearCredito($request);
  
    }


    // public function show($id)
    // {

    //    $credito=CreCredito::buscarCredito($id);
    //     return view('credito.creditoxcuenta',compact('credito'));
        
    // }

    public function edit($id)
    {
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function cuota($id)
    {
        // dd($id);
        $cuota=Cuotas::buscarCuota($id);
        return view('credito.cuotas',compact('cuota'));
        // dd($cuotas);
    }

    public function calcularMontoMensual(Request $request)
    {
        if ($request->ajax()) {
   
            
            if ($request->plazo == 0 |  $request->monto == 0.00 | $request->plazo == '' | $request->monto == '') {
                $CalcularCuotaMensual=0.00;
                return response()->json($CalcularCuotaMensual);

            } else {
                // CALCULO CUOTA MENSUAL A CANCELAR [  IVA INCLUIDO ]
                $iva=13;
                $calcular = floatval(($request->monto / $request->plazo + ($request->monto / $request->plazo) * $request->interes / 100)) * .13 + floatval(($request->monto / $request->plazo + ($request->monto / $request->plazo) * $request->interes / 100));
                $cuotaMensual= round($calcular,2);
                // dd($CalcularCuotaMensual);
                $array= array(
                    'iva'=> $iva,
                    'monto_mensual'=>$cuotaMensual,
                    'plazo'=>$request->plazo,
                    'monto_credito'=>$request->monto,
                    'interes'=>$request->interes,
                );
                // $array = [$cuotaMensual,$request->plazo,$request->monto, $request->interes];
            //    Arr::add($CalcularCuotaMensual,$request->pazo,$request->monto, $request->interes);
                return response()->json($array);

            }
        }
    }
}
