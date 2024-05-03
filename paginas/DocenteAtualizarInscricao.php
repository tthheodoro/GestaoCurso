<?php
session_start();
include ("../basedados/basedados.h");

$IdInscricao = $_POST['IdInscricao']; // Supondo que você tenha um campo hidden no formulário que armazena o ID da inscrição a ser editada
$email = $_POST['email'];
$informacao = $_POST['informacao'];

// Atualizar os dados no banco de dados
$sql = "UPDATE inscricao SET email='$email', informacao='$informacao' WHERE IdInscricao=$IdInscricao";
$result = mysqli_query($conn, $sql);

// Verificar se a atualização foi bem-sucedida
if ($result) {
    header("Location: InscricoesDocente.php"); // Redirecionar de volta para a página de edição
} else {
    header("Location: erro.php"); // Redirecionar para uma página de erro em caso de falha
}
?>
