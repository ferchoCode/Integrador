<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuotas extends Model
{
    use HasFactory;
    protected $table = 'cre_cuota';
    protected $fillable = [
        'id',
        'idcredito',
        'idventa',
        'nombre',
        'monto_cancelar',
        'monto_capital',
        'estado_cuota',
        'fecha_vencimiento',
        'descripcion_cuota',
    ];

    public static function buscarCuota($id){
        return self::where('cre_cuota.idcredito',$id)->get();
    }
}
