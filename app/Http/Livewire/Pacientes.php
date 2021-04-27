<?php

namespace App\Http\Livewire;

use App\Models\Paciente;
use Illuminate\Support\Str;
use Livewire\Component;

class Pacientes extends Component
{
    public $data, $nome_paciente, $data_nascimento, $rg, $orgao_emissor, $sexo, $cpf, $endereco, $telefone, $cep, $selected_id, $searchTerm;
    public $updateMode = false;

    public function render()
    {
        $searchTerm = '%'. $this->searchTerm.'%';
        $pacientes = Paciente::where('nome_paciente','ilike', $searchTerm)->OrderBy('nome_paciente', 'ASC')->paginate(10);
        return view('livewire.paciente.component',compact('pacientes'));
    }

    private function resetInput()
    {
        $this->nome_paciente = null;
        $this->data_nascimento = null;
        $this->rg = null;
        $this->orgao_emissor = null;
        $this->sexo = null;
        $this->cpf = null;
        $this->endereco = null;
        $this->telefone = null;
        $this->cep = null;
    }

    public function store()
    {
        $this->validate([
            'nome_paciente' => 'required|min:5',
            'cpf' => 'required',
            'data_nascimento' => 'required'
        ]);

        Paciente::create([
            'nome_paciente' => $this->nome_paciente,
            'data_nascimento' => $this->data_nascimento,
            'rg' => $this->rg,
            'orgao_emissor' => $this->orgao_emissor,
            'sexo' => $this->sexo,
            'cpf' => $this->cpf,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'cep' => $this->cep,
            'slug'=> Str::slug($this->nome_paciente)
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = Paciente::findOrFail($id);
        $this->selected_id = $id;
        $this->nome_paciente = $record->nome_paciente;
        $this->data_nascimento = $record->data_nascimento;
        $this->rg = $record->rg;
        $this->orgao_emissor = $record->orgao_emissor;
        $this->sexo = $record->sexo;
        $this->cpf = $record->cpf;
        $this->endereco = $record->endereco;
        $this->telefone = $record->telefone;
        $this->cep = $record->cep;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'nome_paciente' => 'required|min:5',
            'data_nascimento' => 'required',
            'cpf' => 'required'
        ]);

        if ($this->selected_id) {
            $record = Paciente::find($this->selected_id);
            $record->update([
                'nome_paciente' => $this->nome_paciente,
                'data_nascimento' => $this->data_nascimento,
                'rg' => $this->rg,
                'orgao_emissor' => $this->orgao_emissor,
                'sexo' => $this->sexo,
                'cpf' => $this->cpf,
                'endereco' => $this->endereco,
                'telefone' => $this->telefone,
                'cep' => $this->cep

            ]);

            $this->resetInput();
            $this->updateMode = false;
        }

    }

    public function destroy($id)
    {
        if ($id) {
            $record = Paciente::where('id', $id);
            $record->delete();
        }
    }
}
