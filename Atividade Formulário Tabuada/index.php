<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h1>Tabuada</h1>

    <form action="tabuada.php" method="post">
        <label for="numero">Selecione um número:</label>
        <select name="numero" id="numero"><br><br>
            <?php

            // Gerando as opções de 0 a 10
            for ($i = 0; $i <= 10; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }

            ?>
        </select>
        <button type="submit">Calcular Tabuada</button>
    </form>
</body>
</html>
