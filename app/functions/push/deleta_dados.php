<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');

// Inclua os arquivos de conexão e caminhos conforme sua estrutura
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

// Verifica se a requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtém o nome da tabela para exclusão (deve ser enviado via POST)
    $tabela = sanitizar($_POST['tabela'] ?? '');
    // Redirecionamento para painel&a=empresas
    $redirectUrl = "painel";

    if (empty($tabela)) {
        redirecionarComMensagem($redirectUrl, "Tabela não especificada.");
    }

    // Obtém o ID do registro a ser excluído. Pode vir como 'id' ou 'id_empresa'
    $id = sanitizar($_POST['id'] ?? $_POST['id_empresa'] ?? '');
    if (empty($id)) {
        redirecionarComMensagem($redirectUrl, "ID não especificado.");
    }

    // Verifica a confirmação da exclusão: o usuário deve digitar "EXCLUIR"
    $confirmarExclusao = sanitizar($_POST['confirmarExclusao'] ?? '');
    if (strtoupper($confirmarExclusao) !== "EXCLUIR") {
        redirecionarComMensagem($redirectUrl, "Confirmação incorreta para exclusão.");
    }

    // Cria a conexão com o banco de dados
    $pdo = db_connect();

    try {
        // Prepara e executa o comando DELETE
        $sql = "DELETE FROM $tabela WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);

        redirecionarComMensagem($redirectUrl, "Registro excluído com sucesso!");
    } catch (PDOException $e) {
        redirecionarComMensagem($redirectUrl, "Erro ao excluir o registro: " . $e->getMessage());
    }
} else {
    redirecionarComMensagem("painel", "Acesso inválido ao script.");
}
?>
