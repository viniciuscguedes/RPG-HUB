<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG-HUB - Tela Inicial</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="custom-header">
        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="img/logo.svg" alt="Logo do RPG-HUB" style="height: 3rem;">
                    <img src="img/RPG-HUB.svg" alt="Texto RPG-HUB" style="height: 1.5rem; margin-left: 0.5rem;">
                </a>
            </div>
        </nav>
    </header>

    <main class="container my-4">

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-hospedar-tab" data-bs-toggle="pill" data-bs-target="#pills-hospedar" type="button" role="tab" aria-controls="pills-hospedar" aria-selected="true">
                    Hospedar Sessão
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-entrar-tab" data-bs-toggle="pill" data-bs-target="#pills-entrar" type="button" role="tab" aria-controls="pills-entrar" aria-selected="false">
                    Entrar na Sessão
                </button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">

            <div class="tab-pane fade show active" id="pills-hospedar" role="tabpanel" aria-labelledby="pills-hospedar-tab" tabindex="0">
                <div class="custom-panel text-center">
                    <div class="p-4">
                        <h2>Hospedar uma nova sessão</h2>
                        <p class="lead my-4">Crie uma nova sala para seus jogadores e comece uma nova aventura.</p>
                        <a href="html/configuracoes.php" class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary btn-lg">Criar Sala</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-entrar" role="tabpanel" aria-labelledby="pills-entrar-tab" tabindex="0">
                <div class="custom-panel">
                    <div class="p-4">
                        <h2 class="text-center">Entrar em uma sessão</h2>
                        
                        <div class="mb-3">
                            <label for="codigo" class="form-label">Código da sala</label>
                            <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Insira o código aqui">
                        </div>

                        <div class="form-check my-3">
                            <input class="form-check-input" type="radio" name="tipoEntrada" id="tipoJogador" value="jogador" checked>
                            <label class="form-check-label" for="tipoJogador">
                                Entrar como jogador
                            </label>
                        </div>

                        <div class="form-check my-3">
                            <input class="form-check-input" type="radio" name="tipoEntrada" id="tipoEspectador" value="espectador">
                            <label class="form-check-label" for="tipoEspectador">
                                Entrar como espectador
                            </label>
                        </div>
                        
                        <div class="d-grid mt-4">
                            <button id="entrar" class="btn btn-primary btn-lg">Entrar no jogo</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.getElementById("entrar").addEventListener("click", function () {
            const tipoEntrada = document.querySelector('input[name="tipoEntrada"]:checked').value;
    
            if (tipoEntrada === "jogador") {
                window.location.href = "html/telaJogador.php";
            } else if (tipoEntrada === "espectador") {
                window.location.href = "html/telaEspectador.php";
            }
        });
    </script>
</body>
</html>