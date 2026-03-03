<?php

declare(strict_types=1);

session_start();
require_once __DIR__ . '/conexao.php';

$nome  = trim($_POST['nome'] ?? '');
$senha = $_POST['senha'] ?? '';

if ($nome === '' || $senha === '') {
    header('Location: ../login/index.php?erro=1');
    exit;
}

$stmt = $pdo->prepare(
    'SELECT ADM_ID, ADM_NOME, ADM_SENHA FROM ADMINISTRADOR WHERE ADM_NOME = :nome AND ADM_ATIVO = 1'
);
$stmt->execute(['nome' => $nome]);
$admin = $stmt->fetch(PDO::FETCH_ASSOC);

$senhaValida = false;
if ($admin !== false) {
    $hash = $admin['ADM_SENHA'];
    if (strlen($hash) >= 60 && substr($hash, 0, 4) === '$2y$') {
        $senhaValida = password_verify($senha, $hash);
    } else {
        $senhaValida = ($senha === $hash);
    }
}

if ($senhaValida) {
    $_SESSION['admin_logado'] = true;
    $_SESSION['admin_id']     = (int) $admin['ADM_ID'];
    $_SESSION['admin_nome']   = $admin['ADM_NOME'];
    header('Location: pages/dashboard.php');
    exit;
}

header('Location: ../login/index.php?erro=1');
exit;
