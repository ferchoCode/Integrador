<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ActFijo extends Model
{
    use HasFactory;
    protected $table= 'act_activo_fijo';
    protected $fillable=[
        'area_id',
        'categoria_id',
        'codigo_activo',
        'nombre_activo',
        'fecha_ingreso_activo',
        'fecha_salida_activo',
        'estado_activo',
    ];

    public static function procedure($request){
        DB::select('CALL act_sp_crear_activo_fijo(?,?,?,?,?)',
        array($request->area, $request->categoria, $request->codigo, $request->nombre, $request->fecha_ingreso));

        // return DB::select(DB::raw('CALL act_sp_crear_activo_fijo(?,?,?,?,?)', 
        // [
        //     $request->area, 
        //     $request->categoria, 
        //     $request->codigo, 
        //     $request->nombre, 
        //     $request->fecha_ingreso
        // ]));
        
        // DB::select(DB::raw("CALL act_sp_crear_activo_fijo :area, :categoria, :codigo_activo ,:nombre_activo ,:fecha_ingreso"),[
        //     ':categoria' => $request->categoria,
        //     ':area' => $request->area,
        //     ':fecha_ingreso' => $request->fecha_ingreso,
        //     ':codigo_activo' => $request->codigo,
        //     ':nombre_activo' => $request->nombre,
        // ]);
        // return DB::select("CALL act_sp_crear_activo_fijo(1,3,'032321232','Cosechadora','2022-09-20 12:01:18')");
    }


    public function area()
    {
        return $this->belongsTo(ActArea::class);
    }
    public function categoria()
    {
        return $this->belongsTo(ActCategoria::class);
    }


}
