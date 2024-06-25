<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Imagens da Pasta</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Imagens da Pasta</h2>

    <?php
    // Função para limpar e validar entrada
    function validar_dados($dados) {
        $dados = trim($dados); // Remove espaços em branco no início e no final
        $dados = stripslashes($dados); // Remove barras invertidas
        $dados = htmlspecialchars($dados); // Converte caracteres especiais em entidades HTML
        return $dados;
    }

    // Recebe e valida o nome da pasta
    $nome_pasta = validar_dados($_POST["nome_pasta"]);

    // Verifica se o número de imagens foi enviado e é um número inteiro válido
    $num_imagens = isset($_POST["num_imagens"]) ? intval($_POST["num_imagens"]) : 0;

    // Caminho da pasta dentro de htdocs (considerando 2 níveis acima)
    $caminho_pasta = '../../../../htdocs/' . $nome_pasta . '/';

    // Array para armazenar nomes de arquivos
    $arquivos = array();

    // Verifica se o diretório existe e é acessível
    if (is_dir($caminho_pasta)) {
        // Lê todos os arquivos na pasta
        $diretorio = scandir($caminho_pasta);

        // Itera sobre os arquivos para verificar se são imagens .jpg e adiciona ao array
        foreach ($diretorio as $arquivo) {
            if (pathinfo($arquivo, PATHINFO_EXTENSION) == "jpg") {
                $arquivos[] = $arquivo;
            }
        }

        // Imprime a tabela com as imagens
        echo '<table>';
        echo '<tr>';
        foreach ($arquivos as $indice => $arquivo) {
            // Limita o número de imagens conforme o número especificado pelo usuário
            if ($indice < $num_imagens) {
                echo '<td>';
                echo '<img src="/' . $nome_pasta . '/' . $arquivo . '" width="150" height="100">';
                echo '</td>';
            }
        }
        echo '</tr>';
        echo '</table>';
    } else {
        echo '<p>A pasta especificada não existe ou não é acessível.</p>';
    }
    ?>

    <p><a href="index.html">Voltar ao formulário</a></p>
</body>
</html>
