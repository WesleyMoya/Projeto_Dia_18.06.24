<?php
$c = $_POST['c'];
$l = $_POST['l'];

$a = $c * $l;

echo "<h3>A ÁREA DO TERRENO É: <h3>" . number_format($a, 2);
?>