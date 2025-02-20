<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');

include '../../conn/connection.php';  // Caminho e nome do arquivo corrigidos
include '../path/caminho.php';
include '../email/envia-email.php';

// Função para sanitizar dados
function sanitizar($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dados de contato
    $nome = sanitizar($_POST['name']);
    $whatsapp = sanitizar($_POST['whatsapp']);
    $email = sanitizar($_POST['email-username']);
    $password = sanitizar($_POST['password']);
    $plano = sanitizar($_POST['plano']);

    // Dados da empresa
    $nome_empresa = sanitizar($_POST['nome_empresa']);
    $cnpj_cpf = sanitizar($_POST['cnpj_cpf']);
    $cep = sanitizar($_POST['cep']);
    $faturamento = sanitizar($_POST['faturamento']);
    $cidade = sanitizar($_POST['cidade']);
    $estado = sanitizar($_POST['estado']);
    $endereco = sanitizar($_POST['endereco']);
    $numero = sanitizar($_POST['numero']);

    // Validação básica dos campos obrigatórios
    if (empty($nome) || empty($whatsapp) || empty($email) || empty($password)) {
        redirecionarComMensagem("cadastro", "Por favor, preencha todos os campos.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        redirecionarComMensagem("cadastro", "Formato de email inválido.");
    }
    function emailJaCadastrado($email, $pdo) {
        $sql = "SELECT id FROM leads WHERE email = :email LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['email' => $email]);
        return $stmt->fetch() ? true : false;
    }
    
    // Em seu código de registro, logo após sanitizar os dados:
    if (emailJaCadastrado($email, $pdo)) {
        redirecionarComMensagem("login", "Email já cadastrado, por favor, faça login.");
    }

    try {
        $pdo = db_connect();  // Função definida em connection.php

        // Array de dados para inserir no banco, incluindo os campos adicionais
        $dados = [
            'nome'          => $nome,
            'fone'          => $whatsapp,
            'email'         => $email,
            'chave'         => $password,
            'acesso'        => date('Y-m-d H:i:s'),
            'nome_empresa'  => $nome_empresa,
            'cnpj_cpf'      => $cnpj_cpf,
            'cep'           => $cep,
            'faturamento'   => $faturamento,
            'cidade'        => $cidade,
            'estado'        => $estado,
            'endereco'      => $endereco,
            'numero'        => $numero,
            'plano'         => $plano
        ];

        $tabela = 'leads';
        $colunas = implode(", ", array_keys($dados));
        $valores = ":" . implode(", :", array_keys($dados));
        $sql = "INSERT INTO $tabela ($colunas) VALUES ($valores)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute($dados);

        enviarLinkCadastroSenha($email, $nome, $password);
        header("Location: " . BASE_URL . "verificar-email");
        exit();

    } catch (PDOException $e) {
        redirecionarComMensagem("cadastro", "Erro ao inserir dados no banco de dados: " . $e->getMessage());
    }
} else {
    header("Location: " . BASE_URL . "login");
    exit();
}

function redirecionarComMensagem($url, $mensagem) {
    header("Location: " . BASE_URL . $url . "&msg=" . urlencode($mensagem));
    exit();
}
