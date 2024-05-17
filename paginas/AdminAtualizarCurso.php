<?php

session_start();
include ("../basedados/basedados.h");


$Nome = $_POST['Nome'];
$Descricao = $_POST['Descricao'];
$Vagas_disponiveis = $_POST['Vagas_disponiveis'];

$sql = "INSERT INTO curso (Nome, Descricao, Vagas_disponiveis) VALUES ('$Nome', '$Descricao', '$Vagas_disponiveis')";
$result = mysqli_query($conn, $sql);

// Verificar se a inserção foi bem-sucedida
if ($result && mysqli_affected_rows($conn) == 1) {
    // Redirecionar para a página de sucesso
    header("Location: CursosAdmin.php");
    die();
} else {
    // Redirecionar de volta com uma mensagem de erro
    header("Location: UtilizadoresAdmin.php?erro=Erro ao adicionar utilizador");
    die();
}

// Fechar a conexão com o banco de dados
mysqli_close($conn);

?>