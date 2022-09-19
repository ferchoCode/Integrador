<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActArea extends Model
{
    use HasFactory;
    protected $table= 'act_area_activo';
    protected $fillable=[
        'responsable_id',
        'nombre_area_activo',
        'ubicacion_activo_activo',
    ];
}