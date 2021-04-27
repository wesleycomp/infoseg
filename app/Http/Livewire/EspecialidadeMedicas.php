<?php

namespace App\Http\Livewire;

use App\Models\EspecialidadeMedica;
use Illuminate\Support\Str;
use Livewire\Component;

class EspecialidadeMedicas extends Component
//livewire.especialidade-medicas

{

public $data, $nome_especialidade_medica, $selected_id, $searchTerm;
    public $updateMode = false;

    public function render()
{
    //exemplo 1
    //$this->data = EspecialidadeMedica::all();
    //return view('livewire.EspecialidadeMedica.component');

    //exemplo 2
    //  return view('livewire.EspecialidadeMedica.component', [
    //            'funcoes' => EspecialidadeMedica::paginate(10),
    //        ]);

    //exemplo 3
    //$funcoes = EspecialidadeMedica::OrderBy('nome_EspecialidadeMedica', 'ASC')->paginate(10);
    //return view('livewire.EspecialidadeMedica.component',compact('funcoes'));

    //exemplo 4 com pesquisa


    $searchTerm = '%'.$this->searchTerm.'%';
    $especialidade_medicas = EspecialidadeMedica::where('nome_especialidade_medica','ilike', $searchTerm)->OrderBy('nome_especialidade_medica', 'ASC')->paginate(10);
    return view('livewire.especialidademedica.component',compact('especialidade_medicas'));
}

    private function resetInput()
{
    $this->nome_especialidade_medica = null;
}

    public function store()
{
    $this->validate([
        'nome_especialidade_medica' => 'required|min:5'
    ]);

    EspecialidadeMedica::create([
        'nome_especialidade_medica' => $this->nome_especialidade_medica,
        'slug'=> Str::slug($this->nome_especialidade_medica)
    ]);

    $this->resetInput();
}

    public function edit($id)
{

    $record = EspecialidadeMedica::findOrFail($id);
    $this->selected_id = $id;
    $this->nome_especialidade_medica = $record->nome_especialidade_medica;

    $this->updateMode = true;
}

    public function update()
{
    $this->validate([
        'selected_id' => 'required|numeric',
        'nome_especialidade_medica' => 'required|min:5'
    ]);

    if ($this->selected_id) {
        $record = EspecialidadeMedica::find($this->selected_id);
        $record->update([
            'nome_especialidade_medica' => $this->nome_especialidade_medica
        ]);

        $this->resetInput();
        $this->updateMode = false;
    }

}

    public function destroy($id)
{
    if ($id) {
        $record = EspecialidadeMedica::where('id', $id);
        $record->delete();
    }
}



}

