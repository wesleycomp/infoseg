<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Funcao;
use Illuminate\Support\Str;

use App\Http\Livewire\Statics;






class FuncaoComponente extends Component
{
    public $data, $nome_funcao, $tipo_cbo, $cbo, $selected_id, $searchTerm;
    public $updateMode = false;


    public function render()
    {

        if(!empty($this->searchTerm)){

            $searchTerm = '%'.$this->searchTerm.'%';
            $funcoes = Funcao::where('nome_funcao','ilike', $searchTerm)->OrderBy('nome_funcao', 'ASC')->paginate(10);

        }




        else {

            $funcoes = Funcao::OrderBy('nome_funcao', 'ASC')->paginate(10);
        }
        return view('livewire.funcao.component',compact('funcoes'));
     }

    private function resetInput()
    {
        $this->nome_funcao = null;
        $this->cbo = null;
        $this->tipo_cbo = null;
    }

    public function store()
    {
        try {
            Funcao::create([
                'nome_funcao' => $this->nome_funcao,
                'cbo' => $this->cbo,
                'tipo_cbo' => $this->tipo_cbo,
                'slug' => Str::slug($this->nome_funcao)
            ]);
            session()->flash('message', 'Função cadastrada com sucesso.');
            $this->resetInput();
        }
        catch (\Exception $e){
          //  echo $e->getMessage();
            session()->flash('error', 'Função não cadastrada');
            $this->resetInput();
        }
    }

    public function edit($id)
    {
        $record = Funcao::findOrFail($id);
        $this->selected_id = $id;
        $this->nome_funcao = $record->nome_funcao;
        $this->cbo = $record->cbo;
        $this->tipo_cbo = $record->tipo_cbo;

        $this->updateMode = true;
    }

    public function update()
    {

        try {

        $this->validate([
            'selected_id' => 'required|numeric',
            'nome_funcao' => 'required|min:5',
            'cbo' => 'required',
            'tipo_cbo' => 'required'
        ]);

        if ($this->selected_id) {
            $record = Funcao::find($this->selected_id);
            $record->update([
                'nome_funcao' => $this->nome_funcao,
                'cbo' => $this->cbo,
                'tipo_cbo' => $this->tipo_cbo
            ]);
            session()->flash('message', 'Função editada com sucesso.');

            $this->resetInput();
            $this->updateMode = false;
        }

        } catch (Exception $e){
            //  echo $e->getMessage();
            session()->flash('error', 'Função não editada');
            $this->resetInput();
        }


    }

    public function destroy($id)
    {
        try {

        if ($id) {
            $record = Funcao::where('id', $id);
            $record->delete();
            session()->flash('message', 'Função excluída com sucesso.');
        }

        } catch (Exception $e){
            //  echo $e->getMessage();
            session()->flash('error', 'Função não excluida');
            $this->resetInput();
        }

    }




}
