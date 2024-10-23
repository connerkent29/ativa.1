<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Média</title>
</head>
<body>
    <h2>Verificação de Média</h2>
    <form method="post">
        <label for="nome">Nome do Aluno:</label>
        <input type="text" name="nome" id="nome" required><br>
        
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" id="nota1" step="0.01" required><br>
        
        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" id="nota2" step="0.01" required><br>
        
        <label for="nota3">Nota 3:</label>
        <input type="number" name="nota3" id="nota3" step="0.01" required><br>
        
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nome = htmlspecialchars($_POST['nome']);
        $nota1 = floatval($_POST['nota1']);
        $nota2 = floatval($_POST['nota2']);
        $nota3 = floatval($_POST['nota3']);
        
        $media = ($nota1 + $nota2 + $nota3) / 3;
        $status = ($media >= 6) ? "Aprovado" : "Reprovado";

        echo "<h3>Resultado</h3>";
        echo "Nome do Aluno: $nome<br>";
        echo "Média: " . number_format($media, 2) . "<br>";
        echo "Status: $status";
    }
    ?>
</body>
</html>

    

