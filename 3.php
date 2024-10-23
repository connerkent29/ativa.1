<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Média</title>
</head>
<body>
    <h2>Cálculo da Média de Três Valores</h2>
    <form method="post">
        <input type="number" name="valores[]" placeholder="Valor 1" step="0.01" required><br>
        <input type="number" name="valores[]" placeholder="Valor 2" step="0.01" required><br>
        <input type="number" name="valores[]" placeholder="Valor 3" step="0.01" required><br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['valores'])) {
        $valores = array_map('floatval', $_POST['valores']);
        $media = array_sum($valores) / count($valores);
        $resultado = ($media >= 7) ? "acima do esperado" : "abaixo do esperado";
        echo "<h3>Resultado:</h3>";
        echo "A média é <strong>$media</strong> e está <strong>$resultado</strong>.";
    }
    ?>
</body>
</html>
