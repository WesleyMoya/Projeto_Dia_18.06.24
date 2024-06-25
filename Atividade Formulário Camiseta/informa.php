<?php
$preco_pequena = 10;
$preco_media = 12;
$preco_grande = 15;

$quantidade_pequenas = isset($_POST['quantidade_pequenas']) ? $_POST['quantidade_pequenas'] : 0;
$quantidade_medias = isset($_POST['quantidade_medias']) ? $_POST['quantidade_medias'] : 0;
$quantidade_grandes = isset($_POST['quantidade_grandes']) ? $_POST['quantidade_grandes'] : 0;

$total_arrecadado = ($quantidade_pequenas * $preco_pequena) + 
                    ($quantidade_medias * $preco_media) + 
                    ($quantidade_grandes * $preco_grande);

echo "<p>Valor total arrecadado: R$ " . number_format($total_arrecadado, 2, ',', '.') . "</p>";
?>