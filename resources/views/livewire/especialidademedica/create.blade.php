<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Nova Especialidade</h3>
    </div>

    <div class="panel-body">
        <div class="form-inline">
            <div class="input-group">
                Nome:&nbsp;
                <input wire:model="nome_especialidade_medica" type="text" class="form-control input-sm">
            </div>
            <div class="input-group">
                <br>
                <button wire:click="store()" class="btn btn-default">Save</button>
            </div>
        </div>
    </div>
</div>
