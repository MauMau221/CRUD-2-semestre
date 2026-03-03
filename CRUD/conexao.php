<?php
/**
 * Conexão PDO com MySQL.
 * Usa config.php se existir; caso contrário, usa as constantes abaixo.
 */

$host   = 'localhost';
$db     = 'ingresso';
$user   = 'root';
$pass   = '';
$charset = 'utf8mb4';

if (file_exists(__DIR__ . '/config.php')) {
    $config = require __DIR__ . '/config.php';
    if (!empty($config['db'])) {
        $host    = $config['db']['host'] ?? $host;
        $db      = $config['db']['name'] ?? $db;
        $user    = $config['db']['user'] ?? $user;
        $pass    = $config['db']['password'] ?? $pass;
        $charset = $config['db']['charset'] ?? $charset;
    }
}

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    if (defined('AMBIENTE_DEV') && AMBIENTE_DEV) {
        throw $e;
    }
    die('Erro ao conectar ao banco de dados. Tente novamente mais tarde.');
}
