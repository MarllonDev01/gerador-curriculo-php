<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Coleta de dados básicos
$nome = htmlspecialchars($_POST['nome']);
$data_nasc = $_POST['data_nascimento'];
$email = htmlspecialchars($_POST['email']);
$telefone = htmlspecialchars($_POST['telefone']);
$endereco = htmlspecialchars($_POST['endereco']);

// Cálculo de idade no PHP para segurança
$nascimento = new DateTime($data_nasc);
$hoje = new DateTime();
$idade = $hoje->diff($nascimento)->y;

// Coleta de dados dinâmicos
$experiencias = [];
if (isset($_POST['exp_empresa'])) {
    for ($i = 0; $i < count($_POST['exp_empresa']); $i++) {
        $experiencias[] = [
            'empresa' => htmlspecialchars($_POST['exp_empresa'][$i]),
            'cargo' => htmlspecialchars($_POST['exp_cargo'][$i]),
            'inicio' => $_POST['exp_inicio'][$i],
            'fim' => $_POST['exp_fim'][$i] ?: 'Atual'
        ];
    }
}

$referencias = [];
if (isset($_POST['ref_nome'])) {
    for ($i = 0; $i < count($_POST['ref_nome']); $i++) {
        $referencias[] = [
            'nome' => htmlspecialchars($_POST['ref_nome'][$i]),
            'contato' => htmlspecialchars($_POST['ref_contato'][$i])
        ];
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Currículo - <?php echo $nome; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @media print {
            .no-print { display: none; }
            body { background-color: white !important; }
            .card { border: none !important; box-shadow: none !important; }
        }
        body { background-color: #f4f7f6; }
        .resume-header { border-bottom: 3px solid #0d6efd; padding-bottom: 20px; margin-bottom: 30px; }
        .section-title { color: #0d6efd; border-left: 5px solid #0d6efd; padding-left: 15px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="no-print text-center mb-4">
            <button onclick="window.print()" class="btn btn-primary btn-lg">Baixar / Imprimir Currículo</button>
            <a href="index.php" class="btn btn-outline-secondary btn-lg">Voltar</a>
        </div>

        <div class="card shadow-lg p-5">
            <div class="resume-header text-center">
                <h1 class="display-4 fw-bold"><?php echo strtoupper($nome); ?></h1>
                <p class="lead">
                    <?php echo $idade; ?> anos | <?php echo $email; ?> | <?php echo $telefone; ?><br>
                    <?php echo $endereco; ?>
                </p>
            </div>

            <div class="row">
                <div class="col-12">
                    <h3 class="section-title">EXPERIÊNCIA PROFISSIONAL</h3>
                    <?php if (empty($experiencias)): ?>
                        <p>Nenhuma experiência informada.</p>
                    <?php else: ?>
                        <?php foreach ($experiencias as $exp): ?>
                            <div class="mb-4">
                                <h5 class="fw-bold mb-1"><?php echo $exp['cargo']; ?></h5>
                                <div class="d-flex justify-content-between text-muted mb-2">
                                    <span><?php echo $exp['empresa']; ?></span>
                                    <span><?php echo $exp['inicio']; ?> até <?php echo $exp['fim']; ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <h3 class="section-title mt-5">REFERÊNCIAS PESSOAIS</h3>
                    <?php if (empty($referencias)): ?>
                        <p>Nenhuma referência informada.</p>
                    <?php else: ?>
                        <div class="row">
                            <?php foreach ($referencias as $ref): ?>
                                <div class="col-md-6 mb-3">
                                    <p class="mb-0"><strong><?php echo $ref['nome']; ?></strong></p>
                                    <p class="text-muted"><?php echo $ref['contato']; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
