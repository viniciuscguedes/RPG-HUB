<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG-HUB - Configurações da Sala</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <header class="custom-header">
        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="../index.php">
                    <img src="../img/logo.svg" alt="Logo do RPG-HUB" style="height: 3rem;">
                    <img src="../img/RPG-HUB.svg" alt="Texto RPG-HUB" style="height: 1.5rem; margin-left: 0.5rem;">
                </a>
                <span class="navbar-text h4 mb-0">
                    Criação de Sala
                </span>
            </div>
        </nav>
    </header>

    <main class="container my-4">
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
                            <a href="telaHost.php">
                                <button class="btn btn-primary btn-lg w-100">Criar e Entrar no Jogo</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        window.onload = () => {
            document.getElementById("nome").value = "";
            document.getElementById("dado").selectedIndex = 0;
            document.getElementById("jogadores").selectedIndex = 0;
        };
    </script>
</body>
</html>