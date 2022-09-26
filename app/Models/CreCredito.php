<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CreCredito extends Model
{
    use HasFactory;
    protected $table = 'cre_credito';
    protected $fillable = [
        'id',
        'idcuentaxcobrar',
        'fecha_solicitud',
        'monto_credito',
        'plazo_credito',
        'interes_credito',
        'monto_mensual',
        'saldo_credito',
        'estado_credito',
    ];
    public static function VerificarExist()
    {
        return self::select('cre_credito.idcuentaxcobrar')->pluck('cre_credito.idcuentaxcobrar')->toArray();
    }

    public static function buscarCredito($id){
        return self::select(
            'cre_credito.id as id',
            'rrhh_contacto.nombre as nombre',
            'rrhh_contacto.apellido as apellido',
            'rrhh_contacto.ci as ci',
            'cre_credito.fecha_solicitud',
            'cre_credito.monto_credito',
            'cre_credito.plazo_credito',
            'cre_credito.interes_credito',
            'cre_credito.monto_mensual',
            'cre_credito.saldo_credito',
            'cre_credito.estado_credito'
        )
            ->join('ven_cuenta_x_cobrar', 'cre_credito.idcuentaxcobrar', 'ven_cuenta_x_cobrar.id')
            ->join('ven_cliente', 'ven_cuenta_x_cobrar.id_cliente', '=', 'ven_cliente.id')
            ->join('rrhh_contacto', 'ven_cliente.id_contacto', '=', 'rrhh_contacto.id')
            ->where('cre_credito.idcuentaxcobrar',$id)->get();
    }
    public static function getCredito()
    {
        return self::select(
            'cre_credito.id as id',
            'rrhh_contacto.nombre as nombre',
            'rrhh_contacto.apellido as apellido',
            'rrhh_contacto.ci as ci',
            'cre_credito.fecha_solicitud',
            'cre_credito.monto_credito',
            'cre_credito.plazo_credito',
            'cre_credito.interes_credito',
            'cre_credito.monto_mensual',
            'cre_credito.saldo_credito',
            'cre_credito.estado_credito'
        )
            ->join('ven_cuenta_x_cobrar', 'cre_credito.idcuentaxcobrar', 'ven_cuenta_x_cobrar.id')
            ->join('ven_cliente', 'ven_cuenta_x_cobrar.id_cliente', '=', 'ven_cliente.id')
            ->join('rrhh_contacto', 'ven_cliente.id_contacto', '=', 'rrhh_contacto.id')->get();
    }
    public static function procedureCrearCredito($request)
    {
        DB::select(
            'CALL cre_sp_crear_credito(?,?,?,?,?,?)',
            array($request->id_venta, $request->fecha_solicitud, $request->monto, $request->plazo, $request->interes, $request->cuota_mesual)
        );
    }
}
