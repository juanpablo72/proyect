<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materias extends Model
{
    use HasFactory;
     protected $fillable = [
        'nombre_materia',
        'docente',
        'tipoMateria',
    ];
}
