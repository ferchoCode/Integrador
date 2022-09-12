<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;
    protected $table = "inscripcion";
    protected $fillable = [
        'alumno_id',
        'nivel_id',
    ];

    public static function getAlumnoReporte()
    {
        return self::select('alumno.id as id','alumno.nombre as nombre','alumno.apellido as apellido',
        'materia.nombre as materia','nivel.nombre as nivel','nivel.id as nivelId')
        ->join('alumno','inscripcion.alumno_id','alumno.id')
        ->join('nivel','inscripcion.nivel_id','nivel.id') 
        ->join('materia','nivel.materia_id','materia.id')->get();
    }

    public static function getAlumno($id)
    {
        // return self::join('especie','raza.especie_id','especie.id')
        // ->select('raza.nombre','raza.id') 
        // ->where('raza.especie_id',1)->pluck('cliente.nombre','id')->toArray();

        return self::join('alumno','inscripcion.alumno_id','alumno.id')
        ->select('alumno.nombre','alumno.apellido','alumno.id') 
        ->where('inscripcion.nivel_id',$id)->get();
    }

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }

    public function nivel()
    {
        return $this->belongsTo(Nivel::class);
    }
}
