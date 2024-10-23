<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pessoa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Editar Pessoa</h1>
        <form action="index.php?controller=pessoa&action=atualizar&id=<?php echo $pessoa['id']; ?>" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?php echo $pessoa['nome']; ?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $pessoa['email']; ?>" required>

            <button type="submit">Salvar</button>
        </form>
        <a href="index.php" class="button">Voltar para a Lista</a>
    </div>
    <footer>
        <p>&copy; Desafio do Amigo Secreto feito por Diogo Duarte</p>
    </footer>
</body>
</html>
