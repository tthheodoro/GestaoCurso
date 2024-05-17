<?php
session_start();

// Verificar se o usuário não está logado ou não tem a permissão necessária
if (!isset($_SESSION['tipoUtilizador']) || $_SESSION['tipoUtilizador'] !== 1) {
    header("Location: index.php");
    exit();
}
?>