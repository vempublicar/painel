<?php
include "app/conn/connection.php";

function fetchDados() {
    $pdo = db_connect();
    $stmt = $pdo->prepare("SELECT * FROM favorito WHERE usuario = ? ORDER BY id DESC LIMIT 500");
    $stmt->execute([$_SESSION['user_id']]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>