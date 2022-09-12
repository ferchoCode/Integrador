<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $table = "mascota";
    protected $fillable = [
        'nombre',
        'edad',
        'sexo',
        'especie_id',
        'raza_id',
        'cliente_id',
        'estado',

    ];
    public static function searchMascota($request){
          // return self::join('especie','raza.especie_id','especie.id')
        // ->select('raza.nombre','raza.id') 
        // ->where('raza.especie_id',1)->pluck('cliente.nombre','id')->toArray();
        if($request->opcion ='Nombre'){
            return self::where($request->input('opcion'), 'LIKE', '%' . $request->input('valor') . '%')->get();
        }else{
            return self::join('especie','mascota.especie_id','especie.id')
            ->where($request->input('opcion'), 'LIKE', '%' . $request->input('valor') . '%')->get();
        }
    }
    public static function saveMascota($request){
        $mascota = new Mascota;
        $mascota->nombre=$request->nombre;
        $mascota->edad=$request->edad;
        $mascota->sexo=$request->sexo;
        $mascota->especie_id=$request->especie_id;
        $mascota->raza_id=$request->raza_id;
        $mascota->cliente_id=$request->cliente_id;
        $mascota->save();
    }

    public function especie()
    {
        return $this->belongsTo(Especie::class);
       
    }
    public function raza()
    {
        return $this->belongsTo(Raza::class);
       
    }
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
