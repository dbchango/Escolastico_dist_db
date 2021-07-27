<?php

namespace App\Http\Livewire\Alumnos;

use App\Models\Alumno;
use Livewire\Component;

class RegistrarAlumnos extends Component
{

    public $nombre;

    public $cedula;

    public function render()
    {
        return view('livewire.alumnos.registrar-alumnos');
    }

    public function registrAlumno(){
        $alumno = new Alumno([
            'nombre' => $this->nombre,
            'cedula' => $this->cedula
        ]);
        if($alumno->saveOrFail()){
            session()->flash('message', 'Alumno registrado correctamente');
            $this->limpiarFormulario();
            return redirect()->to('/alumnos/listado');
        }
    }

    public function limpiarFormulario(){
        $this->nombre = "";
        $this->cedula = "";

    }
}
