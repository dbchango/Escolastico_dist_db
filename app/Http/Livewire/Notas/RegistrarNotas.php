<?php

namespace App\Http\Livewire\Notas;

use App\Models\Alumno;
use App\Models\Materia;
use App\Models\Nota;
use Livewire\Component;

class RegistrarNotas extends Component
{

    public $materia_id;

    public $alumno_id;

    public $nota1;

    public $nota2;

    public $nota3;

    public $materias = [];

    public $alumnos = [];

    public function render()
    {
        $this->materias = Materia::all();
        $this->alumnos = Alumno::all();
        return view('livewire.notas.registrar-notas');
    }

    public function registrarNota(){
        $nota = new Nota([
            'id_materias'=>$this->materia_id,
            'id_alumnos'=>$this->alumno_id,
            'nota1'=>$this->nota1,
            'nota2'=>$this->nota2,
            'nota3'=>$this->nota3,
        ]);
        if($nota->saveOrFail()){
            session()->flash('message', 'Materia registrada correctamente.');
            $this->limpiarFormulario();
            return redirect()->to('/notas/listado');
        }
    }

    public function limpiarFormulario(){
        $this->nota1 = 0.0;
        $this->nota2 = 0.0;
        $this->nota3 = 0.0;
        $this->nota4 = 0.0;

    }
}
