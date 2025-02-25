<?php
header('Content-Type: application/json');

// Lista de usuários autorizados (para teste)
$usuarios_autorizados = [
    "5519997854769@s.whatsapp.net",
    "5519996341869@s.whatsapp.net"
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
    [
        "empresa" => "Vem Publicar",
        "faturamento" => 100.000,
        "despesas" => 45.000,
        "lucro" => 55.000,
        "patrimonio" => 300.000,
        "liquidezCorrente" => 1.5,
        "endividamentoTotal" => 150.000,
        "lucroOperacional" => 50.000,
        "margemBruta" => 55,
        "margemLiquida" => 35,
        "ebitda" => 60.000,
        "roi" => 18,
        "roa" => 13,
        "roe" => 20,
        "capitalDeGiro" => 70.000,
        "necessidadeCapitalGiro" => 25.000,
        "cicloFinanceiro" => 90,
        "cicloOperacional" => 60,
        "estoque" => 30.000,
        "contasReceber" => 40.000,
        "contasPagar" => 35.000,
        "receitaPorEmpregado" => 5.000,
        "lucroPorEmpregado" => 2.000,
        "custoFixo" => 15.000,
        "custoVariavel" => 30.000,
        "investimentoTotal" => 500.000,
        "retornoSobreInvestimento" => 12,
        "pontoEquilibrio" => 75.000,
        "capitalEmpregado" => 200.000,
        "eficienciaOperacional" => 1.2
    ],
    [
        "empresa" => "FEPACOC Solutions",
        "faturamento" => 75.000,
        "despesas" => 32.000,
        "lucro" => 43.000,
        "patrimonio" => 280.000,
        "liquidezCorrente" => 1.8,
        "endividamentoTotal" => 100.000,
        "lucroOperacional" => 45.000,
        "margemBruta" => 57,
        "margemLiquida" => 40,
        "ebitda" => 48.000,
        "roi" => 15,
        "roa" => 16,
        "roe" => 22,
        "capitalDeGiro" => 50.000,
        "necessidadeCapitalGiro" => 20.000,
        "cicloFinanceiro" => 85,
        "cicloOperacional" => 55,
        "estoque" => 25.000,
        "contasReceber" => 30.000,
        "contasPagar" => 20.000,
        "receitaPorEmpregado" => 4.000,
        "lucroPorEmpregado" => 1.800,
        "custoFixo" => 12.000,
        "custoVariavel" => 20.000,
        "investimentoTotal" => 400.000,
        "retornoSobreInvestimento" => 11,
        "pontoEquilibrio" => 50.000,
        "capitalEmpregado" => 150.000,
        "eficienciaOperacional" => 1.1
    ],
    [
        "empresa" => "USA Marketing",
        "faturamento" => 120.000,
        "despesas" => 55.000,
        "lucro" => 65.000,
        "patrimonio" => 350.000,
        "liquidezCorrente" => 2.0,
        "endividamentoTotal" => 120000,
        "lucroOperacional" => 60.000,
        "margemBruta" => 60,
        "margemLiquida" => 45,
        "ebitda" => 70.000,
        "roi" => 20,
        "roa" => 17,
        "roe" => 25,
        "capitalDeGiro" => 80.000,
        "necessidadeCapitalGiro" => 30.000,
        "cicloFinanceiro" => 75,
        "cicloOperacional" => 45,
        "estoque" => 35.000,
        "contasReceber" => 50.000,
        "contasPagar" => 30.000,
        "receitaPorEmpregado" => 6.000,
        "lucroPorEmpregado" => 2.500,
        "custoFixo" => 18.000,
        "custoVariavel" => 37.000,
        "investimentoTotal" => 550.000,
        "retornoSobreInvestimento" => 13,
        "pontoEquilibrio" => 95.000,
        "capitalEmpregado" => 220.000,
        "eficienciaOperacional" => 1.3
    ]
];


// Retorno JSON com a lista de empresas do usuário
echo json_encode([
    "message" => "A análise FEPACOC retorna as informações da sua empresa abaixo",
    "status" => "success",
    "user" => $user,
    "data" => $empresas
]);
exit;
