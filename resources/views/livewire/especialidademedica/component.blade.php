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
        @include('livewire.especialidademedica.update')
    @else
        @include('livewire.especialidademedica.create')
    @endif
        <div class="card card-plain">
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-hover">
                    <thead class="bg-info">
                        <th>
                            <label class="text-dark"> Pesquisar &nbsp; </label><input type="text" wire:model="searchTerm" />
                        </th>
                    </thead>
                </table>

                <table class="table table-hover">
                    <thead>
                    <th>Indice</th>
                    <th>Especialidade Médica</th>
                    <th>Ação</th>
                    </thead>

                    <tbody>
            @foreach($especialidade_medicas as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->nome_especialidade_medica}}</td>
                    <td>
                        <button wire:click="edit({{$row->id}})" class="btn btn-xs btn-warning">Edit</button>
                        <button wire:click="destroy({{$row->id}})" class="btn btn-xs btn-danger">Del</button>
                    </td>
                </tr>
            @endforeach
                    </tbody>
    </table>
                {{ $especialidade_medicas->links('pagination::bootstrap-4') }}
    </div>
        </div>
</div>
</div>
@livewireAssets
