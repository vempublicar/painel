<?php
header('Content-Type: application/json');

// Lista de usuários autorizados (para teste)
$usuarios_autorizados = [
    "5519997854769@s.whatsapp.net",
    "5511987654321@s.whatsapp.net"
];

// Verifica se foi passado um usuário na URL
if (!isset($_GET['user'])) {
    echo json_encode(["status" => "error", "message" => "Usuário não especificado"]);
    exit;
}

$user = $_GET['user']; // Captura o usuário da URL

// Verifica se o usuário está autorizado
if (!in_array($user, $usuarios_autorizados)) {
    echo json_encode(["status" => "error", "message" => "Usuário não autorizado"]);
    exit;
}

// Simulação de empresas associadas ao usuário (poderia vir do banco de dados)
$empresas = [
    ["empresa" => "Vem Publicar", "faturamento" => 100000, "despesas" => 45000],
    ["empresa" => "FEPACOC Solutions", "faturamento" => 75000, "despesas" => 32000],
    ["empresa" => "USA Marketing", "faturamento" => 120000, "despesas" => 55000],
    ["empresa" => "Loja Online XYZ", "faturamento" => 50000, "despesas" => 23000],
    ["empresa" => "Consultoria ABC", "faturamento" => 90000, "despesas" => 40000],
];

// Retorno JSON com a lista de empresas do usuário
echo json_encode([
    "message" => "A análise FEPACOC retorna as informações da sua empresa abaixo",
    "status" => "success",
    "user" => $user,
    "data" => $empresas
]);
exit;
