<div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Sorry!</strong> invalid input.<br><br>
            <ul style="list-style-type:none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if($updateMode)
        @include('livewire.paciente.update')
    @else
        @include('livewire.paciente.create')
    @endif
    <table class="table table-bordered table-condensed">
        <tr >
            <td colspan="6" class="bg-success" align="left">
                <label class="text-center "> Pesquisar &nbsp; </label><input type="text" wire:model="searchTerm" />
            </td>
        </tr>
        <tr>
            <td width="5px">Id</td>
            <td width="50px">Paciente</td>
            <td width="10px">Cpf</td>
            <td  width="15px">Rg</td>
            <td  width="20px">Data Nascimento</td>
            <td  width="30px">Ação</td>
        </tr>
        @foreach($pacientes as $row)
            <tr>
                <td width="5px">{{$row->id}}</td>
                <td width="50px">{{$row->nome_paciente}}</td>
                <td width="10px">{{$row->cpf}}</td>
                <td width="15px">{{$row->rg}}</td>
                <td width="20px">{{$row->data_nascimento}}</td>
                <td width="30px">
                    <button wire:click="edit({{$row->id}})" class="btn btn-xs btn-warning">Edit</button>
                    <button wire:click="destroy({{$row->id}})" class="btn btn-xs btn-danger">Del</button>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $pacientes->links('pagination::bootstrap-4') }}
</div>
@livewireAssets
