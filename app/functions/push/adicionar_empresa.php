<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');

include '../../conn/connection.php';  // Ajuste o caminho conforme sua estrutura
include '../path/caminho.php'; // Certifique-se que este caminho está correto e necessário
include '../email/envia-email.php'; // Inclua se necessário para enviar emails

// Função para sanitizar dados
function sanitizar($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Função para redirecionar com mensagem
function redirecionarComMensagem($url, $mensagem) {
    header("Location: " . BASE_URL . $url . "&msg=" . urlencode($mensagem));
    exit();
}

// Função para verificar se o CNPJ já está cadastrado
function cnpjJaCadastrado($cnpj, $pdo) {
    $sql = "SELECT id FROM empresa WHERE cnpj = :cnpj LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['cnpj' => $cnpj]);
    return $stmt->fetch() ? true : false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitização dos dados do formulário
    $nomeEmpresa = sanitizar($_POST['nome_empresa'] ?? '');
    $cnpj = sanitizar($_POST['cnpj'] ?? '');
    $cep = sanitizar($_POST['cep'] ?? '');
    $segmento = sanitizar($_POST['segmento'] ?? '');
    $setor = sanitizar($_POST['setor'] ?? '');
    $atividade = sanitizar($_POST['atividade'] ?? '');
    $emailComercial = sanitizar($_POST['email_comercial'] ?? '');
    $telefoneComercial = sanitizar($_POST['telefone_comercial'] ?? '');
    $senhaInterna = sanitizar($_POST['senha_interna'] ?? '');
    $compartilhaDados = isset($_POST['compartilha_dados']) ? 'Sim' : 'Não';

    if (empty($nomeEmpresa) || empty($cnpj) || empty($emailComercial)) {
        redirecionarComMensagem("painel&a=empresas", "Por favor, preencha todos os campos obrigatórios.");
    }

    // Cria a conexão com o banco de dados
    $pdo = db_connect();

    if (cnpjJaCadastrado($cnpj, $pdo)) {
        redirecionarComMensagem("painel&a=empresas", "CNPJ já cadastrado, por favor, utilize outro CNPJ.");
    }

    try {
        $dados = [
            'nome' => $nomeEmpresa,
            'cnpj' => $cnpj,
            'cep' => $cep,
            'segmento' => $segmento,
            'setor' => $setor,
            'atividade' => $atividade,
            'email' => $emailComercial,
            'telefone' => $telefoneComercial,
            'senha' => $senhaInterna,
            'compartilha_dados' => $compartilhaDados
        ];

        $tabela = 'empresa';
        $colunas = implode(", ", array_keys($dados));
        $valores = ":" . implode(", :", array_keys($dados));
        $sql = "INSERT INTO $tabela ($colunas) VALUES ($valores)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute($dados);

        // Opção para enviar email ou qualquer outra ação pós-cadastro
        // enviarEmailCadastro($emailComercial, $nomeEmpresa); // Descomente se necessário

        redirecionarComMensagem("painel&a=empresas", "Empresa cadastrada com sucesso!");
    } catch (PDOException $e) {
        redirecionarComMensagem("painel&a=empresas", "Erro ao inserir dados no banco de dados: " . $e->getMessage());
    }
} else {
    redirecionarComMensagem("painel&a=empresas", "Acesso inválido ao script.");
}
?>
