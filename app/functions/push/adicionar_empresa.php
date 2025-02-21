<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');

include '../../conn/connection.php';  // Ajuste o caminho conforme sua estrutura
include '../path/caminho.php'; // Certifique-se que este caminho está correto e necessário
//include '../email/envia-email.php'; // Inclua se necessário para enviar emails

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
    $nomeEmpresa      = sanitizar($_POST['nome_empresa'] ?? '');
    $cnpj             = sanitizar($_POST['cnpj'] ?? '');
    $cep              = sanitizar($_POST['cep'] ?? '');
    $segmento         = sanitizar($_POST['segmento'] ?? '');
    $setor            = sanitizar($_POST['setor'] ?? '');
    $atividade        = sanitizar($_POST['atividade'] ?? '');
    $emailComercial   = sanitizar($_POST['email_comercial'] ?? '');
    $telefoneComercial= sanitizar($_POST['telefone_comercial'] ?? '');
    $senhaInterna     = sanitizar($_POST['senha_interna'] ?? '');
    $compartilhaDados = isset($_POST['compartilha_dados']) ? 'Sim' : 'Não';

    if (empty($nomeEmpresa) || empty($cnpj) || empty($emailComercial)) {
        redirecionarComMensagem("painel&a=empresas", "Por favor, preencha todos os campos obrigatórios.");
    }

    // Cria a conexão com o banco de dados
    $pdo = db_connect();

    if (cnpjJaCadastrado($cnpj, $pdo)) {
        redirecionarComMensagem("painel&a=empresas", "CNPJ já cadastrado, por favor, utilize outro CNPJ.");
    }

    // Tratamento do upload do logotipo
    $logotipoPath = null;
    if (isset($_FILES['logotipo']) && $_FILES['logotipo']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'vendor/upload/logos/';
        $fileTmpName = $_FILES['logotipo']['tmp_name'];
        $fileName    = $_FILES['logotipo']['name'];
        $fileSize    = $_FILES['logotipo']['size'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Validação da extensão (adicione ou remova conforme necessário)
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($fileExtension, $allowedExtensions)) {
            redirecionarComMensagem("painel&a=empresas", "Tipo de arquivo não permitido para logotipo.");
        }

        // Opcional: validação do tamanho do arquivo (ex.: máximo 2MB)
        $maxSize = 2 * 1024 * 1024; // 2MB
        if ($fileSize > $maxSize) {
            redirecionarComMensagem("painel&a=empresas", "Arquivo muito grande para logotipo.");
        }

        // Gera um nome único para evitar conflitos
        $newFileName = uniqid('logo_', true) . '.' . $fileExtension;
        $destination = $uploadDir . $newFileName;

        // Cria o diretório se não existir
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        if (!move_uploaded_file($fileTmpName, $destination)) {
            redirecionarComMensagem("painel&a=empresas", "Erro ao fazer upload do logotipo.");
        }

        // Define o caminho do logotipo para salvar no banco de dados
        $logotipoPath = $destination;
    }

    try {
        $dados = [
            'nome_empresa'      => $nomeEmpresa,
            'cnpj'              => $cnpj,
            'cep'               => $cep,
            'segmento'          => $segmento,
            'setor'             => $setor,
            'atividade'         => $atividade,
            'email_comercial'   => $emailComercial,
            'telefone_comercial'=> $telefoneComercial,
            'senha_interna'     => $senhaInterna,
            'compartilha_dados' => $compartilhaDados,
            'logotipo'          => $logotipoPath
        ];

        $tabela = 'empresa';
        $colunas = implode(", ", array_keys($dados));
        $valores = ":" . implode(", :", array_keys($dados));
        $sql = "INSERT INTO $tabela ($colunas) VALUES ($valores)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute($dados);

        // Caso necessário, descomente a linha para enviar email
        // enviarEmailCadastro($emailComercial, $nomeEmpresa);

        redirecionarComMensagem("painel&a=empresas", "Empresa cadastrada com sucesso!");
    } catch (PDOException $e) {
        redirecionarComMensagem("painel&a=empresas", "Erro ao inserir dados no banco de dados: " . $e->getMessage());
    }
} else {
    redirecionarComMensagem("painel&a=empresas", "Acesso inválido ao script.");
}
?>
