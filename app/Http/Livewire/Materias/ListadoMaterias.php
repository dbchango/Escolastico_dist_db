<?php

namespace App\Http\Livewire\Materias;

use App\Models\Materia;
use Livewire\Component;

class ListadoMaterias extends Component
{

    public $materias = [];

    public function render()
    {
        $this->materias = Materia::all();
        return view('livewire.materias.listado-materias');
    }

    public function eliminarMateria($id){
        $materia = Materia::find($id);
        $materia->delete();
    }
}
