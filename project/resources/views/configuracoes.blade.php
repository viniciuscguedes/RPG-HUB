@extends('layouts.app')

@section('title', 'Configurações da Sala')

@section('header-content')
    <span class="navbar-text h4 mb-0">
        Criação de Sala
    </span>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="custom-panel">
                <div class="p-4">
                    <h2 class="text-center mb-4">Configurações da Sala</h2>
                    
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome da sala</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Ex: A Caverna do Dragão">
                    </div>

                    <div class="mb-3">
                        <label for="dado" class="form-label">Tipo de dado principal</label>
                        <select class="form-select" name="dado" id="dado">
                            <option value="" selected hidden>Selecione o número de lados</option>
                            <option value="D4">D4 (4 lados)</option>
                            <option value="D6">D6 (6 lados)</option>
                            <option value="D8">D8 (8 lados)</option>
                            <option value="D10">D10 (10 lados)</option>
                            <option value="D12">D12 (12 lados)</option>
                            <option value="D20">D20 (20 lados)</option>
                            <option value="D100">D100 (100 lados)</option>
                        </select>
                    </div>

                    <div class="mb-3">
                         <label for="jogadores" class="form-label">Número máximo de jogadores</label>
                        <select class="form-select" name="jogadores" id="jogadores">
                            <option value="" selected hidden>Selecione o número de jogadores</option>
                            <option value="2">2 jogadores</option>
                            <option value="3">3 jogadores</option>
                            <option value="4">4 jogadores</option>
                            <option value="5">5 jogadores</option>
                            <option value="6">6 jogadores</option>
                            <option value="7">7 jogadores</option>
                            <option value="8">8 jogadores</option>
                        </select>
                    </div>
                    
                    <div class="d-grid mt-4">
                        <a href="{{ url('/host') }}">
                            <button class="btn btn-primary btn-lg w-100">Criar e Entrar no Jogo</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        window.onload = () => {
            document.getElementById("nome").value = "";
            document.getElementById("dado").selectedIndex = 0;
            document.getElementById("jogadores").selectedIndex = 0;
        };
    </script>
@endpush