<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nota1', 
        'nota2', 
        'nota3', 
        'id_alumnos',
        'id_materias'
        
    ];

    protected $casts = [
        'id_alumnos' => 'int', 'id_materias' => 'int'
    ];
    
    public function alumno(){
        return $this->belongsTo('App\Models\Alumno', 'id_alumnos');
    }

    public function materia(){
        return $this->belongsTo('App\Models\Materia', 'id_materias');
    }

}
