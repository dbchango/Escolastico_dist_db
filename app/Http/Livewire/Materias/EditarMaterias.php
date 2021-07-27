<?php

namespace App\Http\Livewire\Materias;

use App\Models\Materia;
use Livewire\Component;

class EditarMaterias extends Component
{

    public $materia_id;

    public $nrc;

    public $nombre;


    public function mount($materia_id){
        $this->materia_id = $materia_id;
    }

    public function render()
    {
        $materia = Materia::find($this->materia_id);
        $this->nrc = $materia->nrc; 
        $this->nombre = $materia->nombre; 
        return view('livewire.materias.editar-materias');
    }

    public function editarMateria(){
        $materia = Materia::find($this->materia_id);
        $materia->update([
            'nrc' => $this->nrc,
            'nombre' => $this->nombre
        ]);
        session()->flash('message', 'Materia actualizada corectamente.');
        return redirect()->to('/materias/listado');
    }
}
