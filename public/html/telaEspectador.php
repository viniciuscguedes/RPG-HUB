<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG-HUB - Sala do Espectador</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/telaHost.css">
</head>
<body>

    <header class="custom-header">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="../index.php">
                    <img src="../img/logo.svg" alt="Logo do RPG-HUB" style="height: 3rem;">
                    <img src="../img/RPG-HUB.svg" alt="Texto RPG-HUB" style="height: 1.5rem; margin-left: 0.5rem;">
                </a>
                
                <div class="d-flex gap-4 navbar-text mx-auto">
                    <span>Sala: <strong>A Caverna do Dragão</strong></span>
                    <span>Dado Principal: <strong>D20</strong></span>
                    <span>Jogadores: <strong>1/8</strong></span>
                </div>
                
                <div style="width: 40px;"></div>
            </div>
        </nav>
    </header>

    <main class="container-fluid my-4">
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
                <div class="row h-100">
                    <div class="col-12 text-center d-flex flex-column justify-content-center">
                        <div class="custom-panel">
                            <div class="dado-container mx-auto" style="max-width: 250px;">
                                <img src="../img/D20-fundo.svg" alt="Fundo do Dado D20" class="img-fluid dado-fundo">
                                <img src="../img/D20.svg" alt="Dado D20" class="img-fluid dado-frente">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>