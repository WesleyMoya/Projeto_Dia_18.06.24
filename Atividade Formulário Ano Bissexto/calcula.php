<?php
function isAnoBissexto($ano) {
    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

$ano = intval($_POST["ano"]);
    if (isAnoBissexto($ano)) {
        echo "<h1>O ano $ano é bissexto.</h1>";
    } else {
        echo "<h1>O ano $ano não é bissexto.</h1>";
    }
?>