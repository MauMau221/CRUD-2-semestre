<?php

declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (empty($_SESSION['admin_logado'])) {
    $script = $_SERVER['SCRIPT_NAME'] ?? '';
    $prefix = (strpos($script, '/pages/') !== false) ? '../../' : '../';
    header('Location: ' . $prefix . 'login/index.php');
    exit;
}
