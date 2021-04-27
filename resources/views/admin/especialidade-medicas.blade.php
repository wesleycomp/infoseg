@extends('layouts.app', ['activePage' => 'especialidade_medica', 'titlePage' => __('Especialidade Médica')])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                @livewire('especialidade-medicas')
            </div>
        </div>
    </div>
@endsection
