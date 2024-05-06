<?php
session_start();
include("../basedados/basedados.h");

$mensagem_erro = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Nome']) && isset($_POST['Password']) && isset($_POST['Email']) && isset($_POST['Morada'])) {
        $Nome = $_POST['Nome'];
        $Password = $_POST['Password'];
        $Email = $_POST['Email'];
        $Morada = $_POST['Morada'];

        // Você pode adicionar outras informações aqui, como morada, email, etc.

        // Prepare a consulta SQL para inserir os dados na tabela de usuários
        $sql = "INSERT INTO utilizadores (Nome, Password, Email, Morada) VALUES ('$Nome', '$Password', '$Email', '$Morada')";

        if (mysqli_query($conn, $sql)) {
            // Registro bem-sucedido, redirecionar para a página de login
            header("Location: index.php");
            exit();
        } else {
            $mensagem_erro = 'Erro ao registar o utilizador. Por favor, tente novamente.';
        }
    }
}
?>