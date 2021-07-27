<?php

namespace App\Http\Livewire\Notas;

use App\Models\Nota;
use Illuminate\Database\QueryException;
use Livewire\Component;

class ListadoNotas extends Component
{

    public $notas = [];

    public function render()
    {
        try{
            $this->notas = Nota::all();
            $this->notas->each(function($item){
                $item->alumno;
                $item->materia;
            });
        }catch(QueryException $ex){
            return;
        }
        return view('livewire.notas.listado-notas');
    }

    public function eliminarNota($id){
        $nota = Nota::find($id);
        $nota->delete();
    }
}
