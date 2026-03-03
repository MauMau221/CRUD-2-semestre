<?php
/**
 * Converte senhas em texto plano para hash bcrypt na tabela ADMINISTRADOR.
 * Execute uma vez após importar BANCO.sql: php CRUD/scripts/atualizar_senhas.php
 */

require_once dirname(__DIR__) . '/conexao.php';

$senha_padrao = 'senha123';

try {
    $stmt = $pdo->query("SELECT ADM_ID, ADM_SENHA FROM ADMINISTRADOR");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erro ao ler administradores: " . $e->getMessage());
}

$update = $pdo->prepare("UPDATE ADMINISTRADOR SET ADM_SENHA = :hash WHERE ADM_ID = :id");
$count = 0;

foreach ($rows as $row) {
    $senha_atual = $row['ADM_SENHA'];
    if (strlen($senha_atual) < 60 || strpos($senha_atual, '$2y$') !== 0) {
        $hash = password_hash($senha_padrao, PASSWORD_DEFAULT);
        $update->execute(['hash' => $hash, 'id' => $row['ADM_ID']]);
        $count++;
    }
}

echo "Senhas atualizadas para hash: $count registro(s).\n";
echo "Use a senha: $senha_padrao\n";
