<?php

require_once __DIR__ . '/../conexao.php';
require_once __DIR__ . '/../valida_login.php';

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['PRODUTO_ID'])) {
    $id = $_GET['PRODUTO_ID'];
    try { 
        $stmt = $pdo->prepare("UPDATE
         PRODUTO
         SET PRODUTO_ATIVO	= 0
         WHERE PRODUTO_ID = :PRODUTO_ID"); 
        $stmt->bindParam(':PRODUTO_ID', $id, PDO::PARAM_INT);
        $stmt->execute();
        header('Location: listar_produto.php?update=successdelete');
    } catch (PDOException $erro) {
        $mensagem = "Erro: " . $erro->getMessage();
    }
}
?>