<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $table = "grupo";
    protected $fillable = [
        'horario',
        'nombre',
        'nivel_id',
        'aula_id',
    ];
}