<?php
include "app/conn/connection.php";

function fetchDados() {
    $pdo = db_connect();
    $stmt = $pdo->prepare("SELECT * FROM favorito WHERE usuario = ? ORDER BY id DESC LIMIT 500");
    $stmt->execute([$_SESSION['user_id']]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function carregarEmpresasDoUsuario() {
    $pdo = db_connect();
    // Iniciar sessão se ainda não foi iniciada
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['minhas_empresas'] = '';
    $usuarioEmail = $_SESSION['user_email'];

    // Consulta para buscar operadores vinculados ao usuário
    $sqlOperadores = "SELECT * FROM operadores WHERE usuario = :usuarioEmail";
    $stmtOperadores = $pdo->prepare($sqlOperadores);
    $stmtOperadores->execute(['usuarioEmail' => $usuarioEmail]);

    $operadores = $stmtOperadores->fetchAll(PDO::FETCH_ASSOC);

    // Preparar array para armazenar empresas
    $_SESSION['empresa'] = [];

    // Iterar sobre cada operador e buscar detalhes da empresa correspondente
    foreach ($operadores as $operador) {
        $sqlEmpresa = "SELECT * FROM empresa WHERE cnpj = :cnpj";
        $stmtEmpresa = $pdo->prepare($sqlEmpresa);
        $stmtEmpresa->execute(['cnpj' => $operador['empresa']]);

        $empresa = $stmtEmpresa->fetch(PDO::FETCH_ASSOC);

        // Se a empresa for encontrada, armazena os dados na sessão
        if ($empresa) {
            // Adicionar o cargo ao array de empresa
            $empresa['cargo'] = $operador['cargo'];
            
            // Armazenar os dados atualizados na sessão
            $_SESSION['minhas_empresas'][$empresa['id']] = $empresa;
        }
    }
}


?>