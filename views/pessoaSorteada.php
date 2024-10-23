<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa Sorteada</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Resultado do Sorteio</h1>

        <?php if (!empty($pessoaSorteada)): ?>
            <ul>
                <?php foreach ($pessoaSorteada as $item): ?>
                    <li>
                        <strong><?php echo htmlspecialchars($item['presenteador']['nome']); ?></strong> 
                        tirou <strong><?php echo htmlspecialchars($item['recebedor']['nome']); ?></strong>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nenhuma pessoa encontrada.</p>
        <?php endif; ?>

        <a href="index.php" class="button">Voltar à lista</a>
    </div>
    <footer>
        <p>&copy; Desafio do Amigo Secreto feito por Diogo Duarte</p>
    </footer>
</body>
</html>
