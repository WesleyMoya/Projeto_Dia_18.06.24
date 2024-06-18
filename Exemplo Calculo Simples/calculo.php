<?php
$escolha = $_POST['escolha'];
$num1 = $_POST['n1'];
$num2 = $_POST['n2'];

if($escolha == "somar"){
    echo "<h3>Resultado:<h3>" . $num1+$num2;
}
elseif($escolha == "subtrair"){
    echo "<h3>Resultado:<h3>" . $num1-$num2;
}
elseif($escolha == "dividir"){
    if($num2 == 0){
        echo "<h3>Não pode<h3>";
    }
    else{
        echo "<h3>Resultado:<h3>" . $num1/$num2;
    }
}
elseif($escolha == "multiplicar"){
    echo "<h3>Resultado:<h3>" . $num1*$num2;
}
else{
    echo "<h3>Você não selecionou nada<h3>";
}
?>