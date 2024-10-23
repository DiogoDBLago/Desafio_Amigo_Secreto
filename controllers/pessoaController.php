<?php
require_once 'models/pessoaModel.php';

class PessoaController {
    private $modelo;

    public function __construct() {
        $this->modelo = new PessoaModel();
    }

    public function listar() {
        $termo = isset($_GET['termo']) ? $_GET['termo'] : '';
        $pessoas = $this->modelo->buscarPessoas($termo);
        require 'views/home.php';
    }

    public function cadastrar() {
        require_once 'views/cadastrarPessoa.php';
    }

    public function salvar() {
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $pessoaExistente = $this->modelo->exists($nome, $email);

        if ($pessoaExistente) {
            $_SESSION['erro'] = 'Nome ou email já cadastrado.';
            $_SESSION['nome'] = $nome;
            $_SESSION['email'] = $email;
            header('Location: index.php?controller=pessoa&action=cadastrar&erro=1');
            exit();
        }

        $this->modelo->create($nome, $email);
        $_SESSION['sucesso'] = 'Pessoa cadastrada com sucesso!';
        header('Location: index.php?controller=pessoa&action=cadastrar&sucesso=1');
        exit();
    }

    public function editar($id) {
        $pessoa = $this->modelo->getById($id);
        require_once 'views/editarPessoa.php';
    }

    public function atualizar($id) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $this->modelo->update($id, $nome, $email);
        header('Location: index.php');
    }

    public function deletar($id) {
        $this->modelo->delete($id);
        header('Location: index.php');
    }

    public function sortear() {
        $pessoas = $this->modelo->getAll();

        if (count($pessoas) < 2) {
            echo "Não há pessoas suficientes para o sorteio.";
            return;
        }

        $pessoaSorteada = [];
        $recebedores = $pessoas;

        foreach ($pessoas as $presenteador) {
            do {
                $chaveAleatoria = array_rand($recebedores);
                $recebedor = $recebedores[$chaveAleatoria];
            } while ($recebedor['nome'] === $presenteador['nome']);

            $pessoaSorteada[] = [
                'presenteador' => $presenteador,
                'recebedor' => $recebedor
            ];

            array_splice($recebedores, $chaveAleatoria, 1);
        }

        require_once 'views/pessoaSorteada.php';
    }
}
