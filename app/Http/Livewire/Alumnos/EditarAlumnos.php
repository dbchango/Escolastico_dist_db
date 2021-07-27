<?php

namespace App\Http\Livewire\Alumnos;

use App\Models\Alumno;
use Livewire\Component;

class EditarAlumnos extends Component
{
    public $alumno_id;

    public $nombre;

    public $cedula;
    

    public function mount($alumno_id){
        $this->alumno_id = $alumno_id;
    }

    public function render()
    {
        $alumno = Alumno::find($this->alumno_id);
        $this->nombre = $alumno->nombre;
        $this->cedula = $alumno->cedula;
        return view('livewire.alumnos.editar-alumnos');
    }
    
    public function editarAlumno(){
        $alumno = Alumno::find($this->alumno_id);
        $alumno->update([
            'nombre' => $this->nombre,
            'cedula' => $this->cedula,
        ]);
        session()->flash('message', 'Alumno actualizado corectamente.');
        return redirect()->to('/alumnos/listado');
    }
    
}
