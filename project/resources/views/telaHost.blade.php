@extends('layouts.app')

@section('title', 'Sala do Host')

@section('header-content')
    <div class="d-none d-lg-flex gap-4 navbar-text">
        <span>Sala: <strong>{{ $sala['nome'] }}</strong></span>
        <span>Dado Principal: <strong>{{ $sala['dado'] }}</strong></span>
        <span>Jogadores: <strong>{{ $sala['jogadores'] }}</strong></span>
    </div>
    
    <a href="{{ url('/configuracoes') }}" title="Configurações da Sala">
        <img src="{{ asset('img/shield.svg') }}" alt="Configurações" style="height: 2.5rem;">
    </a>
@endsection

@section('content')
    <div class="row">
        <aside class="col-lg-3">
            <div class="custom-panel h-100">
                <h4 class="text-center mb-3">Jogadores na Sala</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-transparent text-light">Jogador 1 (Host)</li>
                    <li class="list-group-item bg-transparent text-light">Aguardando jogador...</li>
                    <li class="list-group-item bg-transparent text-light">Aguardando jogador...</li>
                    <li class="list-group-item bg-transparent text-light">Aguardando jogador...</li>
                </ul>
            </div>
        </aside>

        <div class="col-lg-9">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="custom-panel">
                        <div class="dado-container mx-auto" style="max-width: 250px;">
                            <img src="{{ asset('img/D20-fundo.svg') }}" alt="Fundo do Dado D20" class="img-fluid dado-fundo">
                            <img src="{{ asset('img/D20.svg') }}" alt="Dado D20" class="img-fluid dado-frente">
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="custom-panel h-100 p-4">
                        <label for="codigoSala" class="form-label">Código da Sala (compartilhe com os jogadores)</label>
                        <div class="input-group">
                            <input type="text" id="codigoSala" class="form-control" value="{{ $sala['codigo'] }}" readonly>
                            <button class="btn btn-secondary" type="button" id="copiarCodigo">Copiar</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="custom-panel h-100 p-4 d-flex flex-column justify-content-center">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-lg">Começar Jogo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.getElementById('copiarCodigo').addEventListener('click', function() {
            const codigoInput = document.getElementById('codigoSala');
            codigoInput.select();
            codigoInput.setSelectionRange(0, 99999); // Para mobile

            try {
                navigator.clipboard.writeText(codigoInput.value);
                
                this.textContent = 'Copiado!';
                setTimeout(() => {
                    this.textContent = 'Copiar';
                }, 2000);

            } catch (err) {
                console.error('Erro ao copiar o código: ', err);
                alert('Erro ao copiar o código.');
            }
        });
    </script>
@endpush