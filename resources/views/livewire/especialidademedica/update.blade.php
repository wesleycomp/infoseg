<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Editar Especialidade Médica</h3>
    </div>

    <div class="panel-body">
        <div class="form-inline">
            <input type="hidden" wire:model="selected_id">
            <div class="input-group">
                Nome:&nbsp;
                <input wire:model="nome_especialidade_medica" type="text" class="form-control input-sm">
            </div>

            <div class="input-group">
                <br>
                <button wire:click="update()" class="btn btn-default">Editar</button>
            </div>
        </div>
    </div>

</div>
