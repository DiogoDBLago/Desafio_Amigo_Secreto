<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Pessoa</title>
    <link rel="stylesheet" href="css/style.css">

    <script>
        function mostrarMensagem(mensagem) {
            alert(mensagem);
        }

        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('erro')) {
                mostrarMensagem('Nome ou email já cadastrado. Por favor, insira informações diferentes.');
            }
            if (urlParams.has('sucesso')) {
                mostrarMensagem('Pessoa cadastrada com sucesso!');
            }
        };
    </script>
</head>
<body>
    <div class="container">
        <h1>Adicionar Pessoa</h1>

        <form action="index.php?controller=pessoa&action=salvar" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?php echo isset($_SESSION['nome']) ? htmlspecialchars($_SESSION['nome']) : ''; unset($_SESSION['nome']); ?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : ''; unset($_SESSION['email']); ?>" required>

            <button type="submit" class="button">Salvar</button>
        </form>

        <a href="index.php" class="button">Voltar para a Lista</a>
    </div>

    <footer>
        <p>&copy; Desafio do Amigo Secreto feito por Diogo Duarte</p>
    </footer>
</body>
</html>
