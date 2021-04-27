<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Nova Funcao</h3>
    </div>

    <div class="panel-body">
        <div class="form-inline">

            <div class="input-group">
                Nome Paciente
                <input wire:model="nome_paciente" type="text" class="form-control input-sm">
            </div>

            <div class="input-group">
                Cpf
                <input wire:model="cpf" type="text" class="form-control input-sm">
            </div>

            <div class="input-group">
                Rg
                <input wire:model="rg" type="text" class="form-control input-sm">
            </div>

            <div class="input-group">
                Orgão Emissor
                <input wire:model="orgao_emissor" type="text" class="form-control input-sm">
            </div>

            <div class="input-group">
                Data Nascimento
                <input wire:model="data_nascimento" type="text" class="form-control input-sm">
            </div>

            <div class="input-group">
                Sexo
                <input wire:model="sexo" type="text" class="form-control input-sm">
            </div>

            <div class="input-group">
                Endereço
                <input wire:model="endereco" type="text" class="form-control input-sm">
            </div>

            <div class="input-group">
                Telefone
                <input wire:model="telefone" type="text" class="form-control input-sm">
            </div>

            <div class="input-group">
                Cep
                <input wire:model="cep" type="text" class="form-control input-sm">
            </div>

            <div class="input-group">
                <br>
                <button wire:click="store()" class="btn btn-default">Save</button>
            </div>
        </div>
    </div>
</div>
