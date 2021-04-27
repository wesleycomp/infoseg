<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Nova Função</h3>
    </div>
    <div class="panel-body">
        <div class="form-row">
            <div class="input-group-text">
                Nome Função: &nbsp;
                <input wire:model="nome_funcao" type="text"  class="">
            </div>
            &nbsp;
            <div class="input-group-text ">
                Cbo: &nbsp;
                <input wire:model="cbo" type="text" class="">
            </div>
        </div>
        <div class="form-row">
            <div class="input-group-text">
                Tipo Cbo: &nbsp;
                <input wire:model="tipo_cbo" type="text" class="">
            </div>
            <div  class="w-25" style="text-align: right;">
                <button wire:click="store()" class="btn btn-default">Salvar</button>
            </div>
        </div>
    </div>
</div>
