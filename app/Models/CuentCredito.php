<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CuentCredito extends Model
{
    use HasFactory;
    protected $table = 'ven_cuenta_x_cobrar';
    protected $fillable = [
        'id',
        'fecha',
        'diasplazo',
        'id_cliente',
        'monto',
        'id_venta',
        'estado',
        'descripcion',
        'id_concepto',
    ];


    public static function getVentaCredito()
    {
        return self::select('ven_cuenta_x_cobrar.id as id','rrhh_contacto.nombre','rrhh_contacto.apellido','ven_tipo_venta.nombre as tipo_venta', 
                            'ven_cuenta_x_cobrar.monto as monto_credito', 'ven_cuenta_x_cobrar.diasplazo as dias_plazo',
                            'ven_cuenta_x_cobrar.fecha as fecha', 'ven_cuenta_x_cobrar.estado as estado', 
                            'ven_cuenta_x_cobrar.descripcion','ven_concepto.concepto as concepto')
            ->join('ven_venta', 'ven_cuenta_x_cobrar.id_venta', '=', 'ven_venta.id')
            ->join('ven_tipo_venta', 'ven_venta.id_tipo', '=', 'ven_tipo_venta.id')
            ->join('ven_cliente', 'ven_cuenta_x_cobrar.id_cliente', '=', 'ven_cliente.id')
            ->join('rrhh_contacto', 'ven_cliente.id_contacto', '=', 'rrhh_contacto.id')
            ->join('ven_concepto', 'ven_cuenta_x_cobrar.id_concepto', '=', 'ven_concepto.id')

            ->where('ven_tipo_venta.nombre', 'D')->get();
    }
    
    public static function getCuentaCredito($id)
    {
        return self::select('ven_venta.id as id','rrhh_contacto.nombre','rrhh_contacto.apellido', 
                            'ven_cuenta_x_cobrar.monto as monto_credito',)
            ->join('ven_venta', 'ven_cuenta_x_cobrar.id_venta', '=', 'ven_venta.id')
            ->join('ven_cliente', 'ven_cuenta_x_cobrar.id_cliente', '=', 'ven_cliente.id')
            ->join('rrhh_contacto', 'ven_cliente.id_contacto', '=', 'rrhh_contacto.id')

            ->where('ven_cuenta_x_cobrar.id', $id)->get();
    }
}
