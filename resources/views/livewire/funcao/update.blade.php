<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Editar Função</h3>
    </div>

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="panel-body">
        <div class="form-row">
            <input type="hidden" wire:model="selected_id">
            <div  class="input-group-text ">
               Nome Função: &nbsp;
                <input wire:model="nome_funcao" type="text" class="">
            </div>
            <div  class="input-group-text ">
               Cbo: &nbsp;
                <input wire:model="cbo" type="text" class="">
            </div>
        </div>
        <div class="form-row">
            <div  class="input-group-text ">
                Tipo Cbo: &nbsp;
                <input wire:model="tipo_cbo" type="text" class="">
            </div>
            <div  class="w-25" style="text-align: right;">

                <button wire:click="update()" class="btn btn-default">Editar</button>
            </div>
        </div>
    </div>
</div>
