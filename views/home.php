<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pessoas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Pessoas</h1>

        <form method="GET" action="index.php">
            <input type="hidden" name="controller" value="pessoa">
            <input type="hidden" name="action" value="listar">
            <input type="text" name="termo" placeholder="Buscar por nome ou email" value="<?php echo isset($_GET['termo']) ? htmlspecialchars($_GET['termo']) : ''; ?>" required>
            <button type="submit" class="button">Buscar</button>
            <a href="index.php?controller=pessoa&action=listar" class="button">Limpar Filtro</a>
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($pessoas)): ?>
                    <?php foreach ($pessoas as $pessoa): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($pessoa['id']); ?></td>
                        <td><?php echo htmlspecialchars($pessoa['nome']); ?></td>
                        <td><?php echo htmlspecialchars($pessoa['email']); ?></td>
                        <td>
                            <a href="index.php?controller=pessoa&action=editar&id=<?php echo $pessoa['id']; ?>" class="button">Editar</a>
                            <a href="index.php?controller=pessoa&action=deletar&id=<?php echo $pessoa['id']; ?>" class="button" onclick="return confirm('Tem certeza que deseja deletar?')">Deletar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="4">Nenhuma pessoa encontrada</td></tr>
                <?php endif; ?>
            </tbody>
        </table>

        <a href="index.php?controller=pessoa&action=cadastrar" class="button">Adicionar Nova Pessoa</a>
        <a href="index.php?controller=pessoa&action=sortear" class="button">Sortear Pessoa</a>
    </div>

    <footer>
        <p>&copy; Desafio do Amigo Secreto feito por Diogo Duarte</p>
    </footer>
</body>

</html>
