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

    // Obtém o nome da tabela
    $tabela = sanitizar($_POST['tabela'] ?? '');
    // Monta a URL de redirecionamento com os parâmetros "indicador" e "cnpj"
    $redirectUrl = "painel&a=edit-empresa&b=" . (isset($_POST['indicador']) ? sanitizar($_POST['indicador']) : '') . "&c=" . (isset($_POST['cnpj']) ? sanitizar($_POST['cnpj']) : '');

    if (empty($tabela)) {
        redirecionarComMensagem($redirectUrl, "Tabela não especificada.");
    }

    // Verifica se há um ID (para update) ou não (insert)
    $id = sanitizar($_POST['id'] ?? '');

    /**
     * Mapeamento dos campos enviados para as colunas da tabela.
     * O campo "create" foi removido, pois a coluna create_at é automática.
     */
    $defaultFieldsMap = [
        'empresa'   => 'empresa',
        'indicador' => 'indicador',
        'status'    => 'status',
        'retorno'   => 'retorno',
        'calculo'   => 'calculo',
        'mes'       => 'mes',
        'ano'       => 'ano'
    ];

    // Array que armazenará os dados a serem inseridos/atualizados nas colunas
    $data = [];
    // Array para guardar os campos extras que serão armazenados em json_dados (incluindo "cnpj")
    $jsonData = [];

    // Percorre os dados enviados via POST
    foreach ($_POST as $key => $value) {
        if (in_array($key, ['tabela', 'id'])) {
            continue;
        }
        $valor = sanitizar($value);
        if (array_key_exists($key, $defaultFieldsMap)) {
            $coluna = $defaultFieldsMap[$key];
            $data[$coluna] = $valor;
        } else {
            // Campos não mapeados serão armazenados no JSON (como o "cnpj")
            $jsonData[$key] = $valor;
        }
    }

    // Se o campo 'usuario' não foi enviado, utiliza o e-mail do usuário logado
    if (!isset($data['usuario']) && isset($_SESSION['user_email'])) {
        $data['usuario'] = $_SESSION['user_email'];
    }

    // Tratamento de upload de imagem, se houver (input com name="imagem")
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = '../../uploads/'; // Diretório para salvar as imagens
        $fileTmpName = $_FILES['imagem']['tmp_name'];
        $fileName    = $_FILES['imagem']['name'];
        $fileSize    = $_FILES['imagem']['size'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Validação das extensões permitidas
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($fileExtension, $allowedExtensions)) {
            redirecionarComMensagem($redirectUrl, "Tipo de arquivo não permitido para imagem.");
        }

        // Validação do tamanho do arquivo (ex.: máximo 2MB)
        $maxSize = 2 * 1024 * 1024;
        if ($fileSize > $maxSize) {
            redirecionarComMensagem($redirectUrl, "Arquivo de imagem muito grande.");
        }

        // Gera um nome único para a imagem
        $newFileName = uniqid('img_', true) . '.' . $fileExtension;
        $destination = $uploadDir . $newFileName;

        // Cria o diretório se não existir
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        if (!move_uploaded_file($fileTmpName, $destination)) {
            redirecionarComMensagem($redirectUrl, "Erro ao fazer upload da imagem.");
        }

        // Adiciona a imagem aos dados extras (JSON)
        $jsonData['imagem'] = $newFileName;
    }

    // Codifica os dados extras em JSON e adiciona no array principal
    $data['json_dados'] = json_encode($jsonData);

    // Cria a conexão com o banco de dados
    $pdo = db_connect();

    try {
        if (!empty($id)) {
            // Atualização: adiciona o ID ao array e monta o comando UPDATE
            $data['id'] = $id;
            $setParts = [];
            foreach ($data as $coluna => $valor) {
                if ($coluna == 'id') continue;
                $setParts[] = "$coluna = :$coluna";
            }
            $setString = implode(", ", $setParts);
            $sql = "UPDATE $tabela SET $setString WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);
            redirecionarComMensagem($redirectUrl, "Registro atualizado com sucesso!");
        } else {
            // Inserção: monta o comando INSERT
            $columns = implode(", ", array_keys($data));
            $placeholders = ":" . implode(", :", array_keys($data));
            $sql = "INSERT INTO $tabela ($columns) VALUES ($placeholders)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);
            redirecionarComMensagem($redirectUrl, "Registro inserido com sucesso!");
        }
    } catch (PDOException $e) {
        redirecionarComMensagem($redirectUrl, "Erro ao inserir/atualizar dados: " . $e->getMessage());
    }
} else {
    redirecionarComMensagem("painel", "Acesso inválido ao script.");
}
?>
