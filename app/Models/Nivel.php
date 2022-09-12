<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use HasFactory;
    protected $table = "nivel";
    protected $fillable = [
        'nombre',
        'materia_id',
    ];
    
    public static function getNivel($id)
    {
        // return self::join('especie','raza.especie_id','especie.id')
        // ->select('raza.nombre','raza.id') 
        // ->where('raza.especie_id',1)->pluck('cliente.nombre','id')->toArray();

        return self::join('materia','nivel.materia_id','materia.id')
        ->select('nivel.nombre','nivel.id') 
        ->where('nivel.materia_id',$id)->get();
    }
    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }
}
