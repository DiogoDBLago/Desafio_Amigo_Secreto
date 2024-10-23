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
                <?php foreach ($pessoas as $pessoa): ?>
                <tr>
                    <td><?php echo $pessoa['id']; ?></td>
                    <td><?php echo $pessoa['nome']; ?></td>
                    <td><?php echo $pessoa['email']; ?></td>
                    <td>
                        <a href="index.php?controller=pessoa&action=editar&id=<?php echo $pessoa['id']; ?>" class="button">Editar</a>
                        <a href="index.php?controller=pessoa&action=deletar&id=<?php echo $pessoa['id']; ?>" class="button" onclick="return confirm('Tem certeza que deseja deletar?')">Deletar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
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
