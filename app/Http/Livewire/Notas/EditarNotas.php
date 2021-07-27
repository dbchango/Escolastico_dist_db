<?php

namespace App\Http\Livewire\Notas;

use App\Models\Alumno;
use App\Models\Materia;
use App\Models\Nota;
use Livewire\Component;

class EditarNotas extends Component
{

    public $nota_id;

    public $materia_id;

    public $alumno_id;

    public $nota1;

    public $nota2;

    public $nota3;

    public $materias = [];

    public $alumnos = [];

    public function mount($nota_id){
        $this->nota_id = $nota_id;
    }

    public function render()
    {
        $this->materias = Materia::all();
        $this->alumnos = Alumno::all();
        $nota = Nota::find($this->nota_id);
        $this->materia_id = $nota->id_materias;
        $this->alumno_id = $nota->id_alumnos;
        $this->nota1 = $nota->nota1;
        $this->nota2 = $nota->nota2;
        $this->nota3 = $nota->nota3;
        return view('livewire.notas.editar-notas');
    }

    public function editarNota(){
        $nota = Nota::find($this->nota_id);
        $nota->update([
            'nota1'=> $this->nota1,
            'nota2'=> $this->nota2,
            'nota3'=> $this->nota3,
            'id_materias'=> $this->materia_id,
            'id_alumnos'=> $this->alumno_id
        ]);
        session()->flash('message', 'Materia actualizada corectamente.');
        return redirect()->to('/notas/listado');

    }
}
