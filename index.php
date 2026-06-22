<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículos - APO</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">ResumeGen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Início</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow">
                    <div class="card-header bg-white">
                        <h2 class="text-center mb-0">Criar seu Currículo</h2>
                    </div>
                    <div class="card-body">
                        <form id="resumeForm" action="generate.php" method="POST">
                            <!-- Dados Pessoais -->
                            <h4 class="mb-3 border-bottom pb-2">Dados Pessoais</h4>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label">Nome Completo</label>
                                    <input type="text" name="nome" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Data de Nascimento</label>
                                    <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Idade</label>
                                    <input type="text" id="idade" class="form-control" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">E-mail</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Telefone</label>
                                    <input type="text" name="telefone" class="form-control" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Endereço</label>
                                    <input type="text" name="endereco" class="form-control" required>
                                </div>
                            </div>

                            <!-- Experiência Profissional (Dinâmico) -->
                            <h4 class="mb-3 border-bottom pb-2 d-flex justify-content-between align-items-center">
                                Experiência Profissional
                                <button type="button" id="addExperience" class="btn btn-sm btn-success">+</button>
                            </h4>
                            <div id="experienceContainer" class="mb-4">
                                <!-- Campos injetados via JS -->
                            </div>

                            <!-- Referências Pessoais (Dinâmico) -->
                            <h4 class="mb-3 border-bottom pb-2 d-flex justify-content-between align-items-center">
                                Referências Pessoais
                                <button type="button" id="addReference" class="btn btn-sm btn-success">+</button>
                            </h4>
                            <div id="referenceContainer" class="mb-4">
                                <!-- Campos injetados via JS -->
                            </div>

                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-lg px-5">Gerar Currículo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
