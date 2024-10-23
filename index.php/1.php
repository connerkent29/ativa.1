<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Soma de Números</title>
</head>
<body>

<h1>Soma de Três Números</h1>

<form method="post">
    <input type="number" name="num1" required placeholder="Número 1"><br>
    <input type="number" name="num2" required placeholder="Número 2"><br>
    <input type="number" name="num3" required placeholder="Número 3"><br>
    <input type="submit" value="Calcular Soma">
</form>

<?php
if ($_POST) {
    echo "<h2>Resultado da Soma: " . ($_POST['num1'] + $_POST['num2'] + $_POST['num3']) . "</h2>";
}
?>

</body>
</html>

