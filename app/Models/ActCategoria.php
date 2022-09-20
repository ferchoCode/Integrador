<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActCategoria extends Model
{
    use HasFactory;
    protected $table= 'act_categoria_activo';
    protected $fillable=[
        'nombre_categoria_activo',
        'tiempo_vida_categoria',
        'coeficiente_depreciacion',
    ];
}
