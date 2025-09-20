@extends('layouts.app')

@section('title', 'Sala do Espectador')

@section('header-content')
    <div class="d-flex gap-4 navbar-text mx-auto">
        <span>Sala: <strong>{{ $sala['nome'] }}</strong></span>
        <span>Dado Principal: <strong>{{ $sala['dado'] }}</strong></span>
        <span>Jogadores: <strong>{{ $sala['jogadores'] }}</strong></span>
    </div>
    
    <div style="width: 40px;"></div>
@endsection

@section('content')
    <div class="row">
        <aside class="col-lg-3">
            <div class="custom-panel h-100">
                <h4 class="text-center mb-3">Jogadores na Sala</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-transparent text-light">Jogador 1 (Host)</li>
                    <li class="list-group-item bg-transparent text-light">Jogador 2</li>
                    <li class="list-group-item bg-transparent text-light">Aguardando jogador...</li>
                    <li class="list-group-item bg-transparent text-light">Aguardando jogador...</li>
                </ul>
            </div>
        </aside>

        <div class="col-lg-9">
            <div class="row h-100">
                <div class="col-12 text-center d-flex flex-column justify-content-center">
                    <div class="custom-panel">
                        <div class="dado-container mx-auto" style="max-width: 250px;">
                            <img src="{{ asset('img/D20-fundo.svg') }}" alt="Fundo do Dado D20" class="img-fluid dado-fundo">
                            <img src="{{ asset('img/D20.svg') }}" alt="Dado D20" class="img-fluid dado-frente">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection