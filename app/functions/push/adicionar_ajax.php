<?php
session_start();
header('Content-Type: application/json');
include '../../conn/connection.php'; // Ajuste o caminho conforme sua estrutura

// Função para sanitizar os dados
function sanitizar($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Verifica se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém e sanitiza os dados enviados
    $ferramentaId = isset($_POST['ferramenta']) ? sanitizar($_POST['ferramenta']) : '';
    $empresaId = isset($_POST['empresa']) ? sanitizar($_POST['empresa']) : '';
    // Supondo que o ID do usuário esteja na sessão (defina conforme sua lógica)
    $usuario = $_SESSION['usuario_id'] ?? null;
    $status = "ativo"; // Status padrão para a inserção

    // Verifica se os dados essenciais foram informados
    if (empty($ferramentaId) || empty($empresaId) || empty($usuario)) {
         echo json_encode(['error' => 'Dados insuficientes para processar a requisição.']);
         exit();
    }

    try {
         // Cria a conexão com o banco de dados (função definida em connection.php)
         $pdo = db_connect();
         // Prepara a query de inserção
         $sql = "INSERT INTO ferramentas (usuario, ferramenta, empresa, status) VALUES (:usuario, :ferramenta, :empresa, :status)";
         $stmt = $pdo->prepare($sql);
         $stmt->execute([
              'usuario'    => $usuario,
              'ferramenta' => $ferramentaId,
              'empresa'    => $empresaId,
              'status'     => $status
         ]);
         echo json_encode(['success' => 'Ferramenta adicionada com sucesso!']);
    } catch (PDOException $e) {
         echo json_encode(['error' => 'Erro ao inserir dados no banco: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['error' => 'Método inválido.']);
}
?>
