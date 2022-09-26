<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ActActualizacion extends Model
{
    use HasFactory;
    protected $table= 'act_actualizar_precio_activo_fijo';
    protected $fillable=[
        'fecha_de_depreciacion',
        'nuevo_precio',
        'descripcion',
        'idactivofijo',
    ];

    public static function buscarActivo($id){
        return self::join('act_activo_fijo','act_actualizar_precio_activo_fijo.idactivofijo','=','act_activo_fijo.id')
        ->where('act_actualizar_precio_activo_fijo.idactivofijo',$id)->paginate(10);
    }

    public static function procActualizar($request,$id){
        return DB::select('CALL act_sp_actualizar_precio_activo(?,?)',
        array($id, $request->descripcion));
    }

    public function activo_fijo()
    {
        return $this->belongsTo(ActFijo::class, 'idactivofijo');
    }
}
