<?php

session_start();
include ("../basedados/basedados.h");

$Nome = $_POST['Nome'];
$Morada = $_POST['Morada'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$tipoUtilizador = $_POST['tipoUtilizador'];
$Aprovado = $_POST['Aprovado'];

if ($Aprovado != 0 && $Aprovado != 1) {
    header("Location: UtilizadoresAdmin.php?erro=Campo Aprovado deve ser 1 ou 0");
    die();
}
// Preparar a query para inserir o novo utilizador
$sql = "INSERT INTO utilizadores (Nome, Morada, Email, Password, tipoUtilizador, Aprovado) VALUES ('$Nome', '$Morada', '$Email', '$Password', '$tipoUtilizador', '$Aprovado')";
$result = mysqli_query($conn, $sql);

// Verificar se a inserção foi bem-sucedida
if ($result && mysqli_affected_rows($conn) == 1) {
    // Redirecionar para a página de sucesso
    header("Location: PrincipalAdmin.php");
    die();
} else {
    // Redirecionar de volta com uma mensagem de erro
    header("Location: UtilizadoresAdmin.php?erro=Erro ao adicionar utilizador");
    die();
}

// Fechar a conexão com o banco de dados
mysqli_close($conn);

?>
