<?php
$kmh = $_POST['kmh'];
$km = $_POST['km'];
$kml = $_POST['kml'];

$th = $km/$kmh;
$tc = $km/$kml;

echo "<h3>Total de horas: <h3>" . number_format($th, 2, '.', ''). "<br>";
echo "<h3>Total de combustivel: <h3>" . number_format($tc, 2, '.', ''). "<br>";
?>