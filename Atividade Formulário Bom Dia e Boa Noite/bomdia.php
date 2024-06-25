<?php
$nome = htmlspecialchars($_POST['nome']);
$horario = htmlspecialchars($_POST['horario']);

// Verifica o período do dia e define a saudação
$hora = (int) substr($horario, 0, 2);
if ($hora >= 0 && $hora < 12) {
    $saudacao = "Bom dia";
} elseif ($hora >= 12 && $hora < 18) {
    $saudacao = "Boa tarde";
} else {
    $saudacao = "Boa noite";
}
echo "<p>Olá, $nome! $saudacao!</p>";
?>