<?php
// Função para limpar e validar entrada
function validar_dados($dados) {
$dados = trim($dados); // Remove espaços em branco no início e no final
$dados = stripslashes($dados); // Remove barras invertidas
$dados = htmlspecialchars($dados); // Converte caracteres especiais em entidades HTML
return $dados;
}

// Inicializa variáveis para armazenar mensagens de erro
$prontuarioErr = $nomeErr = $idadeErr = $periodoErr = $moduloErr = "";

// Valida o prontuário
if (empty($_POST["prontuario"])) {
    $prontuarioErr = "O prontuário é obrigatório";
} else {
    $prontuario = validar_dados($_POST["prontuario"]);
}

// Valida o nome
if (empty($_POST["nome"])) {
    $nomeErr = "O nome é obrigatório";
} else {
    $nome = validar_dados($_POST["nome"]);
}

// Valida a idade
if (empty($_POST["idade"])) {
    $idadeErr = "A idade é obrigatória";
} else {
    $idade = validar_dados($_POST["idade"]);
    if (!filter_var($idade, FILTER_VALIDATE_INT) || $idade < 15 || $idade > 75) {
        $idadeErr = "A idade deve ser um valor entre 15 e 75 anos";
    }
}

// Valida o período
if (empty($_POST["periodo"])) {
    $periodoErr = "O período é obrigatório";
} else {
    $periodo = validar_dados($_POST["periodo"]);
    if ($periodo != "V" && $periodo != "N") {
        $periodoErr = "Informe V para Vespertino ou N para Noturno";
    }
}

// Valida o módulo
if (empty($_POST["modulo"])) {
    $moduloErr = "O módulo é obrigatório";
} else {
    $modulo = validar_dados($_POST["modulo"]);
    if (!filter_var($modulo, FILTER_VALIDATE_INT) || $modulo < 1 || $modulo > 4) {
        $moduloErr = "O módulo deve ser um valor entre 1 e 4";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado da Validação de Dados</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Resultado da Validação de Dados</h2>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($prontuarioErr) && empty($nomeErr) && empty($idadeErr) && empty($periodoErr) && empty($moduloErr)): ?>
        <p>Os dados foram validados com sucesso:</p>
        <ul>
            <li><strong>Prontuário:</strong> <?php echo $prontuario; ?></li>
            <li><strong>Nome:</strong> <?php echo $nome; ?></li>
            <li><strong>Idade:</strong> <?php echo $idade; ?></li>
            <li><strong>Período:</strong> <?php echo ($periodo == 'V') ? 'Vespertino' : 'Noturno'; ?></li>
            <li><strong>Módulo:</strong> <?php echo $modulo; ?></li>
        </ul>
    <?php else: ?>
        <p>Ocorreram erros na validação dos dados:</p>
        <ul>
            <li><?php echo $prontuarioErr; ?></li>
            <li><?php echo $nomeErr; ?></li>
            <li><?php echo $idadeErr; ?></li>
            <li><?php echo $periodoErr; ?></li>
            <li><?php echo $moduloErr; ?></li>
        </ul>
        <p><a href="formulario_estudante.html">Voltar ao formulário</a></p>
    <?php endif; ?>
</body>
</html>
