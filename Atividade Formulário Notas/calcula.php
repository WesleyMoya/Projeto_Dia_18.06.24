<?php
// Recebendo os dados do formulário
$nome = $_POST["nome"];
$nota1 = floatval($_POST["nota1"]);
$nota2 = floatval($_POST["nota2"]);
$frequencia = intval($_POST["frequencia"]);

// Calculando a média aritmética das notas
$media = ($nota1 + $nota2) / 2;

// Verificando condições de aprovação
$mensagem = "";
$cor = "";

if ($media < 5) {
    $mensagem = "Reprovado por nota";
    $cor = "red";
} elseif ($frequencia < 75) {
    $mensagem = "Reprovado por frequência";
    $cor = "red";
} else {
    $mensagem = "Aprovado";
    $cor = "green";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Verificação</title>
    <link rel="stylesheet" href="estilos.css">
    <style>
        .resultado {
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Resultado da Verificação</h1>
        <div class="resultado">
            <p><strong>Nome:</strong> <?php echo $nome; ?></p>
            <p><strong>Nota 1:</strong> <?php echo $nota1; ?></p>
            <p><strong>Nota 2:</strong> <?php echo $nota2; ?></p>
            <p><strong>Frequência:</strong> <?php echo $frequencia; ?>%</p>
            <p><strong>Média:</strong> <?php echo number_format($media, 2); ?></p>
            <p style="color: <?php echo $cor; ?>;"><?php echo $mensagem; ?></p>
        </div>
    </div>
</body>
</html>
