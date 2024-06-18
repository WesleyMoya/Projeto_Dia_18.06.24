<?php
    if (isset($_POST['nome']) && isset($_POST['idade'])) {
 
        $nome = $_POST['nome'];
        $idade = intval($_POST['idade']);

        $dias_de_vida = $idade * 365;

        echo "<h3>$nome tem $dias_de_vida dias de vida.</h3>";
    } else {
        echo "<p>Por favor, preencha o nome e a idade para calcular os dias de vida.</p>";
    }
?>
