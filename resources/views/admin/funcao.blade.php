@extends('layouts.app', ['activePage' => 'funcao', 'titlePage' => __('Funções')])
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                @livewire('funcao-componente')
            </div>
        </div>
    </div>
@endsection
