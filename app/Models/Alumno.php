<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $table = "alumno";
    protected $fillable = [
        'nombre',
        'apellido',
        'direccion',
        'telefono',
        'fecha_nacimiento',

    ];

    public static function saveAlumno($request){
        $alumno = new Alumno;
        $alumno->nombre=$request->nombre;
        $alumno->apellido=$request->apellido;
        $alumno->direccion=$request->direccion;
        $alumno->telefono=$request->telefono;
        $alumno->fecha_nacimiento=$request->fecha_nacimiento;
        $alumno->save();
    }

    public static function updateAlumno($request,$id){
        $alumno=Alumno::findOrFail($id);
        $alumno->nombre=$request->nombre;
        $alumno->apellido=$request->apellido;
        $alumno->direccion=$request->direccion;
        $alumno->telefono=$request->telefono;
        $alumno->fecha_nacimiento=$request->fecha_nacimiento;
        $alumno->update();
    }
}
