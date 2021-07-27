<?php

namespace App\Http\Livewire\Materias;

use App\Models\Materia;
use Livewire\Component;

class RegistrarMaterias extends Component
{

    public $nrc;

    public $nombre;

    public function render()
    {
        return view('livewire.materias.registrar-materias');
    }

    public function registrarMateria(){
        $materia = new Materia([
            'nrc' => $this->nrc,
            'nombre' => $this->nombre
        ]);
        if($materia->saveOrFail()){
            session()->flash('message', 'Materia registrada correctamente.');
            $this->limpiarFormulario();
            return redirect()->to('/materias/listado');
        }
    }

    public function limpiarFormulario(){
        $this->nombre = "";
        $this->nrc = "";

    }
}
