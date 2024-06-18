<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="show.css">
    <title>Processamento</title>
</head>
<body>
    <?php
    // Verifica se o formulário foi submetido usando o método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se o campo 'nome' foi enviado e o sanitiza, caso contrário, define como string vazia
        $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : '';
        // Verifica se o campo 'radio' foi enviado e o sanitiza, caso contrário, define como string vazia
        $radio = isset($_POST['radio']) ? htmlspecialchars($_POST['radio']) : '';
        // Verifica se o campo 'preferencias' foi enviado como um array, caso contrário, define como array vazio
        $preferencias = isset($_POST['preferencias']) ? $_POST['preferencias'] : [];
        // Verifica se o campo 'cor' foi enviado e o sanitiza, caso contrário, define como string vazia
        $cor = isset($_POST['cor']) ? htmlspecialchars($_POST['cor']) : '';
        // Verifica se o campo 'bio' foi enviado e o sanitiza, caso contrário, define como string vazia
        $bio = isset($_POST['bio']) ? htmlspecialchars($_POST['bio']) : '';

        // Exibe o nome
        echo "<h3>Nome: $nome</h3><br>";
        // Exibe o sexo
        echo "<h3>Sexo: $radio</h3><br>";
        // Exibe as preferências selecionadas
        echo "<h3>Preferência(s): ";
        if (!empty($preferencias)) { // Verifica se há preferências selecionadas
            // Concatena as preferências em uma string separada por vírgulas e as sanitiza
            echo implode(", ", array_map('htmlspecialchars', $preferencias));
        } else {
            // Exibe 'Nenhuma' se nenhuma preferência foi selecionada
            echo "Nenhuma";
        }
        echo "</h3><br>";
        // Exibe a cor favorita
        echo "<h3>Cor favorita: $cor</h3><br>";
        // Exibe a biografia em uma área de texto somente leitura
        echo "Biografia: <br><textarea readonly rows='10' cols='30'>$bio</textarea>";
    }
    ?>
</body>
</html>
