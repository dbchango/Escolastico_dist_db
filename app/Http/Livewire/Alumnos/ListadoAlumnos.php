<?php

namespace App\Http\Livewire\Alumnos;
use App\Models\Alumno;
use Livewire\Component;

class ListadoAlumnos extends Component
{
  
    public $alumnos = [];

    public function render()
    {
        $this->alumnos = Alumno::all();
        return view('livewire.alumnos.listado-alumnos');
    }

    public function eliminarAlumno($id){
        
        $alumno = Alumno::find($id);
        $alumno->delete();
    }

}
