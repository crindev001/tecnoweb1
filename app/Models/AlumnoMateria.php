<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumnoMateria extends Model
{
    use HasFactory;
    protected $fillable = [
        'nota',
        'id_alumno',
        'id_materia'
    ];
}
