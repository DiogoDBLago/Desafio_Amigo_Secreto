<?php
require_once 'controllers/PessoaController.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'pessoa';
$action = isset($_GET['action']) ? $_GET['action'] : 'listar';

$pessoaController = new PessoaController();

if ($controller == 'pessoa') {
    switch ($action) {
        case 'listar':
            $pessoaController->listar();
            break;
        case 'cadastrar':
            $pessoaController->cadastrar();
            break;
        case 'salvar':
            $pessoaController->salvar();
            break;
        case 'editar':
            $pessoaController->editar($_GET['id']);
            break;
        case 'atualizar':
            $pessoaController->atualizar($_GET['id']);
            break;
        case 'deletar':
            $pessoaController->deletar($_GET['id']);
            break;
        case 'sortear':
            $pessoaController->sortear();
            break;
        default:
            $pessoaController->listar();
            break;
    }
}
