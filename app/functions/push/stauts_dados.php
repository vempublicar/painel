<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');

include '../../conn/connection.php';
include '../path/caminho.php';

/**
 * Sanitiza os dados recebidos
 */
function sanitizar($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

/**
 * Redireciona para uma URL com uma mensagem
 */
function redirecionarComMensagem($url, $mensagem) {
    header("Location: " . BASE_URL . $url . "&msg=" . urlencode($mensagem));
    exit();
}

// Verifica se a requisição foi feita via GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    // Obtém e sanitiza os parâmetros
    $id       = sanitizar($_GET['id'] ?? '');
    $tabela   = sanitizar($_GET['tabela'] ?? '');
    $novoStatus = sanitizar($_GET['status'] ?? '');

    // Verifica se os parâmetros essenciais foram informados
    if (empty($id) || empty($tabela) || empty($novoStatus)) {
        redirecionarComMensagem("painel", "Parâmetros insuficientes para alteração de status.");
    }

    // Valida se o status informado é "ativo" ou "inativo"
    if (!in_array($novoStatus, ['ativo', 'inativo'])) {
        redirecionarComMensagem("painel", "Status inválido.");
    }
    
    // Opcional: valide se o nome da tabela é permitido
    $tabelasPermitidas = ['financeiro']; // Adicione outras tabelas permitidas, se necessário
    if (!in_array($tabela, $tabelasPermitidas)) {
        redirecionarComMensagem("painel", "Tabela não permitida.");
    }

    $pdo = db_connect();

    try {
        $sql = "UPDATE $tabela SET status = :status WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'status' => $novoStatus,
            'id'     => $id
        ]);
        redirecionarComMensagem("painel", "Status alterado com sucesso!");
    } catch (PDOException $e) {
        redirecionarComMensagem("painel", "Erro ao alterar status: " . $e->getMessage());
    }
} else {
    redirecionarComMensagem("painel", "Acesso inválido ao script.");
}
?>
