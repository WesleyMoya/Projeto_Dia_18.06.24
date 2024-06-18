<?php
 $numero = intval($_POST['numero']);

 echo "<h2>Tabuada do $numero</h2>";
 echo "<ul>";

 for ($i = 1; $i <= 10; $i++) {
     $resultado = $numero * $i;
     echo "<li>$numero x $i = $resultado</li>";
 }

 echo "</ul>";
?>
