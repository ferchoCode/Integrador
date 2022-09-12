<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = "curso";
    protected $fillable = [
        'alumno_id',
        'profesor_id',
        'grupo_id',
    ];
    public static function getGrupoReporte()
    {

        // return self::join('alumno','curso.alumno_id','alumno.id')   
        // ->join('grupo','curso.grupo_id','grupo.id')    
        // ->join('nivel','grupo.nivel_id','nivel.id')
        // ->join('nivel','grupo.nivel_id','nivel.id')

        // ->join('materia','nivel.materia_id','materia.id')       


        // ->select('alumno.nombre as nombre','grupo.nombre as grupo','materia.nombre as materia','nivel.nombre as nivel')
        // ->where('curso.alumno_id',$alumno)
        // ->where('grupo.nivel_id',$nivelId)->get();

        $listado = array();
        $curso = Inscripcion::getAlumnoReporte();
        for ($i = 0; $i < count($curso); $i++) {
            $array = array(
                'nombre' => $curso[$i]->nombre,
                'apellido' => $curso[$i]->apellido,
                'materia' => $curso[$i]->materia,
                'nivel' => $curso[$i]->nivel,
                'grupo' => Curso::_getGrupoReporte($curso[$i]->id)
            );
            array_push($listado, $array);
        }
        return json_decode(json_encode($listado));
    }
    public static function _getGrupoReporte($id)
    {
        $reportes = self::join('grupo', 'curso.grupo_id', 'grupo.id')

            ->select('grupo.nombre as nombre')
            ->where('curso.alumno_id', $id)->get();

        foreach ($reportes as $reporte) {
            return json_decode(json_encode($reporte));
        }
    }

    public static function buscarXgrupo($id)
    {
        $listado = array();
        $listadPush = array();

        $curso = Inscripcion::getAlumnoReporte();
        for ($i = 0; $i < count($curso); $i++) {
            $array = array(
                'nombre' => $curso[$i]->nombre,
                'apellido' => $curso[$i]->apellido,
                'materia' => $curso[$i]->materia,
                'nivel' => $curso[$i]->nivel,

                'grupo' => Curso::_buscarXgrupo($curso[$i]->id, $id),

            );
            array_push($listado, $array);
        }
        for ($i = 0; $i < count($listado); $i++) {
            if ($listado[$i]['grupo'] !== null) {
                array_push($listadPush, $listado[$i]);
            }
        }

        return json_decode(json_encode($listadPush));
    }
    
    public static function _buscarXgrupo($id, $grupoid)
    {
        $reportes = self::join('grupo', 'curso.grupo_id', 'grupo.id')

            ->select('grupo.nombre as nombre')
            ->where('curso.alumno_id', $id)
            ->where('curso.grupo_id', $grupoid)->get();

        foreach ($reportes as $reporte) {
            return json_decode(json_encode($reporte));
        }
    }

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }

    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }
}
