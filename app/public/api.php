<?php
header('Content-Type: application/json');

// Lista de usuários autorizados (para teste, pode ser um array simples)
$usuarios_autorizados = [
    "5519997854769@s.whatsapp.net",
    "5511987654321@s.whatsapp.net"
];

// Verifica se foi passado um usuário na URL
if (!isset($_GET['user'])) {
    echo json_encode(["status" => "error", "message" => "Não encontrou informações suficientes, é necessário que o usuário preencha seus dados no Fepacoc.com"]);
    exit;
}

$user = $_GET['user']; // Captura o usuário da URL

// Verifica se o usuário está na lista de autorizados
if (!in_array($user, $usuarios_autorizados)) {
    echo json_encode(["status" => "error", "message" => "Você não está autorizado a receber estas informações, cadastre-se no Fepacoc"]);
    exit;
}

// Valores fictícios de teste
$faturamento = 100000;  // Exemplo de faturamento da empresa
$despesas = 45000;      // Exemplo de despesas da empresa

// Retorno JSON
echo json_encode([
    "message" => "A análise FEPACOC retorna as informações da sua empresa abaixo",
    "status" => "success",
    "data" => [
        "faturamento" => $faturamento,
        "despesas" => $despesas
    ]
]);
exit;
