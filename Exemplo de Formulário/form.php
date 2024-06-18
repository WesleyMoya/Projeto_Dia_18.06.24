<?php
    $username = $_POST['user'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $erro = 0;
    $caixa = "";

    if(strlen($username)<5){
        echo "O Username deve possuir no mínimo 5 caracteres.<br>";
        $erro += 1;
    }
    if(strlen($senha)<5){
        echo "A Senha deve possuir no mínimo 5 caracteres.<br>";
        $erro += 1;
    }

    if(empty($username)){
        $erro += 1;
        $caixa = "Username";
    }
    if(empty($senha)){
        $erro += 1;
        $caixa = "Senha";
    }
    if(empty($nome)){
        $erro += 1;
        $caixa = "Nome";
    }
    if(empty($email)){
        $erro += 1;
        $caixa = "Email";
    }
    if(empty($cidade)){
        $erro += 1;
        $caixa = "Cidade";
    }
    if(empty($estado)){
        $erro += 1;
        $caixa = "Estado";
    }

    if($erro == 0){
        echo "Formulário concuído, parabéns!!";
    }
    elseif($erro == 1){
        echo "Algo aconteceu ao preencher $caixa. Tente novamente fazer o cadastro.";
    }
    else{
        echo "Muitos dados foram preenchidos inorretamente. Tente novamente fazer o cadastro";
    }