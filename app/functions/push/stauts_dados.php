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

// Verifica se a requisição foi feita via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtém e sanitiza os parâmetros enviados pelo formulário
    $id          = sanitizar($_POST['id'] ?? '');
    $novoStatus  = sanitizar($_POST['status'] ?? '');
    $redirectUrl = "painel&a=edit-empresa&b=" . (isset($_POST['indicador']) ? sanitizar($_POST['indicador']) : '') . "&c=" . (isset($_POST['cnpj']) ? sanitizar($_POST['cnpj']) : '');

    // Verifica se os parâmetros essenciais foram informados
    if (empty($id) || empty($novoStatus) || empty($redirectUrl)) {
        redirecionarComMensagem("painel", "Parâmetros insuficientes para alteração de status.");
    }

    // Valida se o status informado é "ativo" ou "inativo"
    if (!in_array($novoStatus, ['ativo', 'inativo'])) {
        redirecionarComMensagem($redirectUrl, "Status inválido.");
    }

    // Define a tabela onde o registro será atualizado
    $tabela = 'financeiro';

    $pdo = db_connect();

    try {
        $sql = "UPDATE $tabela SET status = :status WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'status' => $novoStatus,
            'id'     => $id
        ]);
        // Redireciona para a URL informada com mensagem de sucesso
        redirecionarComMensagem($redirectUrl, "Status alterado com sucesso!");
    } catch (PDOException $e) {
        redirecionarComMensagem($redirectUrl, "Erro ao alterar status: " . $e->getMessage());
    }
} else {
    redirecionarComMensagem("painel", "Acesso inválido ao script.");
}
?>
