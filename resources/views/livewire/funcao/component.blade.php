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
            @include('livewire.funcao.update')
        @else
            @include('livewire.funcao.create')
        @endif

        @include('layouts.messages')
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
                    <th>Id</th>
                    <th>Função</th>
                    <th>Cbo</th>
                    <th>Tipo Cbo</th>
                    <th>Ação</th>
                    </thead>
                    <tbody>
                    @foreach($funcoes as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->nome_funcao}}</td>
                            <td>{{$row->cbo}}</td>
                            <td>{{$row->tipo_cbo}}</td>
                            <td >
                                <button wire:click="edit({{$row->id}})" class="btn btn-xs btn-warning">Edit</button>
                                <button wire:click="destroy({{$row->id}})" class="btn btn-xs btn-danger">Del</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $funcoes->links('pagination::bootstrap-4') }}
            </div>
</div>
</div>
glob
